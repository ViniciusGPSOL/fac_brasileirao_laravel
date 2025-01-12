<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classificacao extends Model
{
    protected $table = 'classificacoes';

    protected $fillable = [
        'time_id',
        'ano',
        'pontos',
        'jogos',
        'vitorias',
        'empates',
        'derrotas',
        'gols_pro',
        'gols_contra',
        'saldo_gols',
        'data_atualizacao'
    ];

    protected $casts = [
        'data_atualizacao' => 'date'
    ];

    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class);
    }
}
