<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Time extends Model
{
    protected $fillable = ['nome', 'estadio', 'cidade'];

    public function partidasCasa(): HasMany
    {
        return $this->hasMany(Partida::class, 'id_time_casa');
    }

    public function partidasVisitante(): HasMany
    {
        return $this->hasMany(Partida::class, 'id_time_visitante');
    }
}
