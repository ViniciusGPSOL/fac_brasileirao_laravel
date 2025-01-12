<?php

namespace App\Http\Controllers;

use App\Models\Classificacao;
use App\Models\Partida;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassificacaoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'data' => 'nullable|date',
            'ano' => 'nullable|integer'
        ]);

        $ano = $request->input('ano', Carbon::now()->year);
        $data = $request->input('data')
            ? Carbon::parse($request->input('data'))
            : Carbon::now();

        $classificacao = DB::table('times')
            ->select([
                'times.id',
                'times.nome',
                DB::raw('COUNT(DISTINCT p.id) as jogos'),
                DB::raw('SUM(
                    CASE
                        WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                             (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                        THEN 3
                        WHEN p.gols_time_casa = p.gols_time_visitante
                        THEN 1
                        ELSE 0
                    END
                ) as pontos'),
                DB::raw('SUM(
                    CASE
                        WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                             (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                        THEN 1
                        ELSE 0
                    END
                ) as vitorias'),
                DB::raw('SUM(
                    CASE
                        WHEN p.gols_time_casa = p.gols_time_visitante
                        THEN 1
                        ELSE 0
                    END
                ) as empates'),
                DB::raw('SUM(
                    CASE
                        WHEN (p.id_time_casa = times.id AND p.gols_time_casa < p.gols_time_visitante) OR
                             (p.id_time_visitante = times.id AND p.gols_time_visitante < p.gols_time_casa)
                        THEN 1
                        ELSE 0
                    END
                ) as derrotas'),
                DB::raw('SUM(
                    CASE
                        WHEN p.id_time_casa = times.id
                        THEN p.gols_time_casa
                        ELSE p.gols_time_visitante
                    END
                ) as gols_pro'),
                DB::raw('SUM(
                    CASE
                        WHEN p.id_time_casa = times.id
                        THEN p.gols_time_visitante
                        ELSE p.gols_time_casa
                    END
                ) as gols_contra'),
                DB::raw('SUM(
                    CASE
                        WHEN p.id_time_casa = times.id
                        THEN p.gols_time_casa - p.gols_time_visitante
                        ELSE p.gols_time_visitante - p.gols_time_casa
                    END
                ) as saldo_gols')
            ])
            ->leftJoin('partidas as p', function ($join) use ($ano, $data) {
                $join->on(function ($query): void {
                    $query->on('times.id', '=', 'p.id_time_casa')
                        ->orOn('times.id', '=', 'p.id_time_visitante');
                })
                    ->whereYear('p.data', $ano)
                    ->where('p.data', '<=', $data);
            })
            ->groupBy('times.id', 'times.nome')
            ->orderByDesc('pontos')
            ->orderByDesc('vitorias')
            ->orderByDesc('saldo_gols')
            ->orderByDesc('gols_pro')
            ->get();

        return response()->json([
            'data' => $classificacao,
            'ano' => $ano,
            'data_referencia' => $data,
            'atualizado_em' => now()
        ]);
    }

    public function store(Partida $partida): JsonResponse
    {
        try {
            DB::beginTransaction();

            $classificacao = $this->getClassificacao(data: $partida->data);
            $ano = Carbon::parse($partida->data)->year;
            $dataAtualizacao = $partida->data;

            // First, let's check existing records
            $existingRecords = Classificacao::where('ano', $ano)
                ->where('data_atualizacao', $dataAtualizacao)
                ->get();

            if ($existingRecords->isNotEmpty()) {
                Log::warning('Found existing records for this date', [
                    'count' => $existingRecords->count(),
                    'records' => $existingRecords->toArray()
                ]);
            }

            foreach ($classificacao as $time) {
                try {
                    $data = [
                        'time_id' => $time->id,
                        'ano' => $ano,
                        'pontos' => $time->pontos,
                        'jogos' => $time->jogos,
                        'vitorias' => $time->vitorias,
                        'empates' => $time->empates,
                        'derrotas' => $time->derrotas,
                        'gols_pro' => $time->gols_pro,
                        'gols_contra' => $time->gols_contra,
                        'saldo_gols' => $time->saldo_gols,
                        'data_atualizacao' => $dataAtualizacao
                    ];

                    // Use updateOrCreate instead of create
                    Classificacao::updateOrCreate(
                        [
                            'time_id' => $time->id,
                            'ano' => $ano,
                            'data_atualizacao' => $dataAtualizacao
                        ],
                        $data
                    );

                } catch (\Exception $e) {
                    Log::error('Error processing team classification', [
                        'team_id' => $time->id,
                        'error' => $e->getMessage(),
                        'data' => $data
                    ]);
                    throw $e;
                }
            }

            DB::commit();
            return response()->json($classificacao);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to store classification', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    public function getHistorico(Request $request): JsonResponse
    {
        $request->validate([
            'time_id' => 'required|exists:times,id',
            'ano' => 'required|integer'
        ]);

        $historico = Classificacao::with('time')
            ->where('time_id', $request->time_id)
            ->where('ano', $request->ano)
            ->orderBy('data_atualizacao')
            ->get()
            ->map(function (Classificacao $classificacao): array {
                return [
                    'data' => $classificacao->data_atualizacao,
                    'posicao' => $this->getPosicaoNaData(
                        timeId: $classificacao->time_id,
                        data: $classificacao->data_atualizacao
                    ),
                    'pontos' => $classificacao->pontos,
                    'jogos' => $classificacao->jogos,
                    'aproveitamento' => round(
                        num: ($classificacao->pontos / ($classificacao->jogos * 3)) * 100,
                        precision: 2
                    )
                ];
            });

        return response()->json($historico);
    }

    private function getPosicaoNaData($timeId, $data): int
    {
        $classificacao = $this->getClassificacao(data: $data);

        foreach ($classificacao as $index => $time) {
            if ($time->id === $timeId) {
                return $index + 1;
            }
        }

        return 0;
    }

    private function getClassificacao($data)
    {
        return DB::table('times')
            ->select([
                'times.id',
                'times.nome',
                DB::raw('COUNT(DISTINCT p.id) as jogos'),
                DB::raw('SUM(
                CASE
                    WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                         (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                    THEN 3
                    WHEN p.gols_time_casa = p.gols_time_visitante
                    THEN 1
                    ELSE 0
                END
            ) as pontos'),
                DB::raw('SUM(
                CASE
                    WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                         (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                    THEN 1
                    ELSE 0
                END
            ) as vitorias'),
                DB::raw('SUM(
                CASE
                    WHEN p.gols_time_casa = p.gols_time_visitante
                    THEN 1
                    ELSE 0
                END
            ) as empates'),
                DB::raw('SUM(
                CASE
                    WHEN (p.id_time_casa = times.id AND p.gols_time_casa < p.gols_time_visitante) OR
                         (p.id_time_visitante = times.id AND p.gols_time_visitante < p.gols_time_casa)
                    THEN 1
                    ELSE 0
                END
            ) as derrotas'),
                DB::raw('COALESCE(SUM(
                CASE
                    WHEN p.id_time_casa = times.id
                    THEN p.gols_time_casa
                    WHEN p.id_time_visitante = times.id
                    THEN p.gols_time_visitante
                    ELSE 0
                END
            ), 0) as gols_pro'),
                DB::raw('COALESCE(SUM(
                CASE
                    WHEN p.id_time_casa = times.id
                    THEN p.gols_time_visitante
                    WHEN p.id_time_visitante = times.id
                    THEN p.gols_time_casa
                    ELSE 0
                END
            ), 0) as gols_contra'),
                DB::raw('COALESCE(SUM(
                CASE
                    WHEN p.id_time_casa = times.id
                    THEN p.gols_time_casa - p.gols_time_visitante
                    WHEN p.id_time_visitante = times.id
                    THEN p.gols_time_visitante - p.gols_time_casa
                    ELSE 0
                END
            ), 0) as saldo_gols')
            ])
            ->leftJoin('partidas as p', function ($join) use ($data) {
                $join->on(function ($query) {
                    $query->on('times.id', '=', 'p.id_time_casa')
                        ->orOn('times.id', '=', 'p.id_time_visitante');
                })
                    ->where('p.data', '<=', $data);
            })
            ->groupBy('times.id', 'times.nome')
            ->orderBy(DB::raw('SUM(
            CASE
                WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                     (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                THEN 3
                WHEN p.gols_time_casa = p.gols_time_visitante
                THEN 1
                ELSE 0
            END
        )'), 'desc')
            ->orderBy(DB::raw('SUM(
            CASE
                WHEN (p.id_time_casa = times.id AND p.gols_time_casa > p.gols_time_visitante) OR
                     (p.id_time_visitante = times.id AND p.gols_time_visitante > p.gols_time_casa)
                THEN 1
                ELSE 0
            END
        )'), 'desc')
            ->orderBy(DB::raw('COALESCE(SUM(
            CASE
                WHEN p.id_time_casa = times.id
                THEN p.gols_time_casa - p.gols_time_visitante
                WHEN p.id_time_visitante = times.id
                THEN p.gols_time_visitante - p.gols_time_casa
                ELSE 0
            END
        ), 0)'), 'desc')
            ->orderBy(DB::raw('COALESCE(SUM(
            CASE
                WHEN p.id_time_casa = times.id
                THEN p.gols_time_casa
                WHEN p.id_time_visitante = times.id
                THEN p.gols_time_visitante
                ELSE 0
            END
        ), 0)'), 'desc')
            ->get();
    }
}
