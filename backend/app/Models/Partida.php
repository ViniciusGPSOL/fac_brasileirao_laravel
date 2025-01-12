<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partida extends Model
{
    protected $fillable = [
        'data',
        'id_time_casa',
        'gols_time_casa',
        'id_time_visitante',
        'gols_time_visitante',
        'estadio'
    ];

    protected $casts = [
        'data' => 'date'
    ];

    public function timeCasa(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'id_time_casa');
    }

    public function timeVisitante(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'id_time_visitante');
    }
}
