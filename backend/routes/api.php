<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ClassificacaoController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request): mixed {
    return $request->user();
});

Route::apiResource('times', TimeController::class);
Route::apiResource('partidas', PartidaController::class);
Route::get('partidas/by-date', [PartidaController::class, 'getByDate']);
Route::get('partidas/by-team', [PartidaController::class, 'getByTeam']);
Route::get('classificacao', [ClassificacaoController::class, 'index']);
Route::get('classificacao/historico', [ClassificacaoController::class, 'getHistorico']);
