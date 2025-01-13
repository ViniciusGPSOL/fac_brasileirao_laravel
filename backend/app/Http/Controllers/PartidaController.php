<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PartidaController extends Controller
{
    protected $classificacaoController;

    public function __construct(ClassificacaoController $classificacaoController)
    {
        $this->classificacaoController = $classificacaoController;
    }

    public function index(): JsonResponse
    {
        $partidas = Partida::with(['timeCasa', 'timeVisitante'])
            ->orderBy('data', 'desc')
            ->get();
        return response()->json($partidas);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'data' => 'required|date',
            'id_time_casa' => 'required|exists:times,id',
            'gols_time_casa' => 'required|integer|min:0',
            'id_time_visitante' => 'required|exists:times,id|different:id_time_casa',
            'gols_time_visitante' => 'required|integer|min:0',
            'estadio' => 'nullable|string|max:128'
        ]);

        try {
            DB::beginTransaction();

            $partida = Partida::create($validated);

            // Update classification history after creating the match
            $this->classificacaoController->store($partida);

            DB::commit();

            return response()->json(
                $partida->load(['timeCasa', 'timeVisitante']),
                201
            );

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating match',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Partida $partida): JsonResponse
    {
        return response()->json(
            $partida->load(['timeCasa', 'timeVisitante'])
        );
    }

    public function update(Request $request, Partida $partida): JsonResponse
    {
        $validated = $request->validate([
            'data' => 'required|date',
            'id_time_casa' => 'required|exists:times,id',
            'gols_time_casa' => 'required|integer|min:0',
            'id_time_visitante' => 'required|exists:times,id|different:id_time_casa',
            'gols_time_visitante' => 'required|integer|min:0',
            'estadio' => 'required|string|max:128'
        ]);

        try {
            DB::beginTransaction();

            $partida->update($validated);

            // Update classification history after updating the match
            $this->classificacaoController->store(partida: $partida);

            DB::commit();

            return response()->json(
                $partida->load(['timeCasa', 'timeVisitante'])
            );

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error updating match',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Partida $partida): JsonResponse
    {
        try {
            DB::beginTransaction();

            $partida->delete();

            // Optionally, you might want to update classification after deleting a match
            // This depends on your business requirements
            $this->classificacaoController->store(partida: $partida);

            DB::commit();

            return response()->json(null, 204);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting match',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Additional useful methods

    public function getByDate(Request $request): JsonResponse
    {
        $request->validate([
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio'
        ]);

        $partidas = Partida::with(['timeCasa', 'timeVisitante'])
            ->whereBetween('data', [$request->data_inicio, $request->data_fim])
            ->orderBy('data')
            ->get();

        return response()->json($partidas);
    }

    public function getByTeam(Request $request): JsonResponse
    {
        $request->validate([
            'time_id' => 'required|exists:times,id'
        ]);

        $partidas = Partida::with(['timeCasa', 'timeVisitante'])
            ->where('id_time_casa', $request->time_id)
            ->orWhere('id_time_visitante', $request->time_id)
            ->orderBy('data', 'desc')
            ->get();

        return response()->json($partidas);
    }
}
