<?php

namespace Database\Seeders;

use App\Models\Partida;
use App\Http\Controllers\ClassificacaoController;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partidas = [
            [
                'data' => '2022-04-11',
                'id_time_casa' => 1,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-04-09',
                'id_time_casa' => 2,
                'id_time_visitante' => 17,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-04-11',
                'id_time_casa' => 3,
                'id_time_visitante' => 15,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 4,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 5,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 6,
                'id_time_visitante' => 20,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 7,
                'id_time_visitante' => 12,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-04-12',
                'id_time_casa' => 8,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 9,
                'id_time_visitante' => 19,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 3,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-04-10',
                'id_time_casa' => 10,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-04-16',
                'id_time_casa' => 11,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 12,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 13,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 14,
                'id_time_visitante' => 1,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 15,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 16,
                'id_time_visitante' => 5,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 17,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 18,
                'id_time_visitante' => 3,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-04-18',
                'id_time_casa' => 19,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-04-17',
                'id_time_casa' => 20,
                'id_time_visitante' => 7,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 17,
                'id_time_visitante' => 13,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-04-26',
                'id_time_casa' => 1,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 8,
                'id_time_visitante' => 12,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 9,
                'id_time_visitante' => 14,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Barueri'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 2,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-04-23',
                'id_time_casa' => 15,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 5,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-04-24',
                'id_time_casa' => 6,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-04-23',
                'id_time_casa' => 16,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-06-02',
                'id_time_casa' => 7,
                'id_time_visitante' => 19,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-01',
                'id_time_casa' => 10,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-04-21',
                'id_time_casa' => 18,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-04-30',
                'id_time_casa' => 13,
                'id_time_visitante' => 15,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-05-01',
                'id_time_casa' => 14,
                'id_time_visitante' => 7,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-05-02',
                'id_time_casa' => 20,
                'id_time_visitante' => 1,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-04-30',
                'id_time_casa' => 11,
                'id_time_visitante' => 6,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-04-30',
                'id_time_casa' => 19,
                'id_time_visitante' => 16,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-01',
                'id_time_casa' => 12,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-05-03',
                'id_time_casa' => 3,
                'id_time_visitante' => 17,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-05-01',
                'id_time_casa' => 4,
                'id_time_visitante' => 2,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-05-10',
                'id_time_casa' => 1,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 18,
                'id_time_visitante' => 10,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nacional de Brasília Mané Garrincha'
            ],
            [
                'data' => '2022-05-09',
                'id_time_casa' => 7,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-09',
                'id_time_casa' => 8,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 9,
                'id_time_visitante' => 2,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 15,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 16,
                'id_time_visitante' => 14,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 17,
                'id_time_visitante' => 12,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-05-08',
                'id_time_casa' => 5,
                'id_time_visitante' => 11,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-05-07',
                'id_time_casa' => 6,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-05-16',
                'id_time_casa' => 11,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-05-14',
                'id_time_casa' => 9,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 2,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio General Sylvio Raulino de Oliveira'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 4,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 6,
                'id_time_visitante' => 5,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 1,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 10,
                'id_time_visitante' => 7,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 3,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-05-15',
                'id_time_casa' => 20,
                'id_time_visitante' => 14,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-05-14',
                'id_time_casa' => 19,
                'id_time_visitante' => 18,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-21',
                'id_time_casa' => 17,
                'id_time_visitante' => 19,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Barueri'
            ],
            [
                'data' => '2022-05-21',
                'id_time_casa' => 18,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-05-22',
                'id_time_casa' => 12,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-05-22',
                'id_time_casa' => 13,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-05-23',
                'id_time_casa' => 15,
                'id_time_visitante' => 1,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-05-21',
                'id_time_casa' => 5,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-05-12',
                'id_time_casa' => 16,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-05-22',
                'id_time_casa' => 7,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-22',
                'id_time_casa' => 14,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-05-22',
                'id_time_casa' => 8,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 17,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 7,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 12,
                'id_time_visitante' => 15,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 14,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 4,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-05-31',
                'id_time_casa' => 20,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-05-28',
                'id_time_casa' => 11,
                'id_time_visitante' => 16,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 2,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-05-29',
                'id_time_casa' => 3,
                'id_time_visitante' => 19,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-05-30',
                'id_time_casa' => 6,
                'id_time_visitante' => 1,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-06-07',
                'id_time_casa' => 10,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 19,
                'id_time_visitante' => 4,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 8,
                'id_time_visitante' => 2,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 9,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-06-06',
                'id_time_casa' => 16,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 1,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 18,
                'id_time_visitante' => 7,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-04',
                'id_time_casa' => 13,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 15,
                'id_time_visitante' => 17,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-06-05',
                'id_time_casa' => 5,
                'id_time_visitante' => 14,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 17,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-06-10',
                'id_time_casa' => 7,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-10',
                'id_time_casa' => 9,
                'id_time_visitante' => 10,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-06-08',
                'id_time_casa' => 12,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 16,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 8,
                'id_time_visitante' => 15,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 13,
                'id_time_visitante' => 19,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-06-10',
                'id_time_casa' => 4,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 5,
                'id_time_visitante' => 1,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-06-09',
                'id_time_casa' => 2,
                'id_time_visitante' => 6,
                'gols_time_casa' => 5,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-13',
                'id_time_casa' => 7,
                'id_time_visitante' => 15,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 3,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-06-11',
                'id_time_casa' => 14,
                'id_time_visitante' => 8,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 6,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 20,
                'id_time_visitante' => 18,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 11,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-06-14',
                'id_time_casa' => 10,
                'id_time_visitante' => 1,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 12,
                'id_time_visitante' => 16,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 4,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-06-12',
                'id_time_casa' => 2,
                'id_time_visitante' => 5,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 10,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 18,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 19,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-15',
                'id_time_casa' => 8,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 13,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 16,
                'id_time_visitante' => 4,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 11,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-06-17',
                'id_time_casa' => 1,
                'id_time_visitante' => 7,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 9,
                'id_time_visitante' => 5,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 2,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-06-16',
                'id_time_casa' => 15,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 7,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 12,
                'id_time_visitante' => 19,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 2,
                'id_time_visitante' => 1,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 3,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 14,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 4,
                'id_time_visitante' => 15,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 6,
                'id_time_visitante' => 18,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 17,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 5,
                'id_time_visitante' => 8,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-06-19',
                'id_time_casa' => 20,
                'id_time_visitante' => 10,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 11,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 1,
                'id_time_visitante' => 9,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 10,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 18,
                'id_time_visitante' => 13,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 3,
                'id_time_visitante' => 8,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 14,
                'id_time_visitante' => 17,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-06-25',
                'id_time_casa' => 15,
                'id_time_visitante' => 16,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-06-25',
                'id_time_casa' => 20,
                'id_time_visitante' => 4,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 19,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-06-26',
                'id_time_casa' => 6,
                'id_time_visitante' => 7,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 1,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 2,
                'id_time_visitante' => 14,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 13,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 4,
                'id_time_visitante' => 7,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 16,
                'id_time_visitante' => 10,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 17,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 19,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-07-02',
                'id_time_casa' => 8,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 9,
                'id_time_visitante' => 15,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-07-03',
                'id_time_casa' => 5,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 11,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 17,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 7,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-07-11',
                'id_time_casa' => 12,
                'id_time_visitante' => 10,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 2,
                'id_time_visitante' => 19,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 14,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 6,
                'id_time_visitante' => 3,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-07-12',
                'id_time_casa' => 20,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-07-09',
                'id_time_casa' => 16,
                'id_time_visitante' => 1,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-07-10',
                'id_time_casa' => 4,
                'id_time_visitante' => 8,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 1,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 10,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 18,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nacional de Brasília Mané Garrincha'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 8,
                'id_time_visitante' => 11,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-07-19',
                'id_time_casa' => 9,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-07-16',
                'id_time_casa' => 15,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 5,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 19,
                'id_time_visitante' => 14,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-07-17',
                'id_time_casa' => 3,
                'id_time_visitante' => 2,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-07-18',
                'id_time_casa' => 13,
                'id_time_visitante' => 16,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 17,
                'id_time_visitante' => 10,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 18,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nacional de Brasília Mané Garrincha'
            ],
            [
                'data' => '2022-07-20',
                'id_time_casa' => 19,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-07-22',
                'id_time_casa' => 12,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-07-22',
                'id_time_casa' => 13,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 14,
                'id_time_visitante' => 4,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 15,
                'id_time_visitante' => 5,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 16,
                'id_time_visitante' => 7,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 11,
                'id_time_visitante' => 2,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-07-21',
                'id_time_casa' => 20,
                'id_time_visitante' => 3,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 1,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 10,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 7,
                'id_time_visitante' => 17,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 8,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 9,
                'id_time_visitante' => 20,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 2,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio General Sylvio Raulino de Oliveira'
            ],
            [
                'data' => '2022-07-26',
                'id_time_casa' => 4,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 6,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 5,
                'id_time_visitante' => 13,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-07-24',
                'id_time_casa' => 3,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-07-30',
                'id_time_casa' => 11,
                'id_time_visitante' => 4,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-08-02',
                'id_time_casa' => 17,
                'id_time_visitante' => 2,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 18,
                'id_time_visitante' => 5,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 14,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 15,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 20,
                'id_time_visitante' => 6,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-08-01',
                'id_time_casa' => 16,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 12,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-07-31',
                'id_time_casa' => 13,
                'id_time_visitante' => 1,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-07-30',
                'id_time_casa' => 19,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 1,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-08-06',
                'id_time_casa' => 10,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 7,
                'id_time_visitante' => 20,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 9,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 2,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-08-09',
                'id_time_casa' => 4,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 5,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-08-08',
                'id_time_casa' => 6,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-08-06',
                'id_time_casa' => 8,
                'id_time_visitante' => 13,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-08-07',
                'id_time_casa' => 3,
                'id_time_visitante' => 18,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 10,
                'id_time_visitante' => 5,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 18,
                'id_time_visitante' => 15,
                'gols_time_casa' => 5,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 12,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 3,
                'id_time_visitante' => 16,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 13,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 14,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 4,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-08-15',
                'id_time_casa' => 20,
                'id_time_visitante' => 2,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-08-13',
                'id_time_casa' => 11,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-08-14',
                'id_time_casa' => 19,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 17,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-08-23',
                'id_time_casa' => 1,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 7,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 8,
                'id_time_visitante' => 10,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 2,
                'id_time_visitante' => 4,
                'gols_time_casa' => 5,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 15,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 5,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-08-20',
                'id_time_casa' => 6,
                'id_time_visitante' => 11,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 16,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-08-21',
                'id_time_casa' => 9,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-08-27',
                'id_time_casa' => 11,
                'id_time_visitante' => 5,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 10,
                'id_time_visitante' => 18,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 19,
                'id_time_visitante' => 15,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 12,
                'id_time_visitante' => 17,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-08-30',
                'id_time_casa' => 14,
                'id_time_visitante' => 16,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-08-27',
                'id_time_casa' => 4,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-08-30',
                'id_time_casa' => 20,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 2,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 3,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-08-28',
                'id_time_casa' => 13,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-09-03',
                'id_time_casa' => 8,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-09-05',
                'id_time_casa' => 12,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 13,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 15,
                'id_time_visitante' => 2,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-09-06',
                'id_time_casa' => 17,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 18,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 14,
                'id_time_visitante' => 20,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 5,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 16,
                'id_time_visitante' => 9,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-09-04',
                'id_time_casa' => 7,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 11,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 1,
                'id_time_visitante' => 15,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 10,
                'id_time_visitante' => 13,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-09-10',
                'id_time_casa' => 19,
                'id_time_visitante' => 17,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 9,
                'id_time_visitante' => 8,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 2,
                'id_time_visitante' => 7,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 4,
                'id_time_visitante' => 5,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-09-10',
                'id_time_casa' => 20,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 3,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-09-11',
                'id_time_casa' => 6,
                'id_time_visitante' => 16,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-09-17',
                'id_time_casa' => 1,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 10,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 9,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 13,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 16,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 18,
                'id_time_visitante' => 2,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 19,
                'id_time_visitante' => 3,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-09-18',
                'id_time_casa' => 8,
                'id_time_visitante' => 7,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-09-19',
                'id_time_casa' => 15,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-09-20',
                'id_time_casa' => 5,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 11,
                'id_time_visitante' => 10,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-09-28',
                'id_time_casa' => 17,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 12,
                'id_time_visitante' => 13,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 2,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-09-26',
                'id_time_casa' => 3,
                'id_time_visitante' => 1,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 4,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 6,
                'id_time_visitante' => 9,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 20,
                'id_time_visitante' => 16,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 14,
                'id_time_visitante' => 5,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-09-29',
                'id_time_casa' => 7,
                'id_time_visitante' => 18,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 18,
                'id_time_visitante' => 16,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-21',
                'id_time_casa' => 3,
                'id_time_visitante' => 4,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 14,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 15,
                'id_time_visitante' => 8,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-10-01',
                'id_time_casa' => 6,
                'id_time_visitante' => 2,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-10-01',
                'id_time_casa' => 20,
                'id_time_visitante' => 17,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 11,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 1,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-10-02',
                'id_time_casa' => 19,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-04',
                'id_time_casa' => 10,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 17,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-10-07',
                'id_time_casa' => 1,
                'id_time_visitante' => 10,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 18,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 19,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-07',
                'id_time_casa' => 9,
                'id_time_visitante' => 4,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-10-05',
                'id_time_casa' => 8,
                'id_time_visitante' => 14,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-10-07',
                'id_time_casa' => 13,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 15,
                'id_time_visitante' => 7,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 16,
                'id_time_visitante' => 12,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-10-06',
                'id_time_casa' => 5,
                'id_time_visitante' => 2,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-10-11',
                'id_time_casa' => 17,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 7,
                'id_time_visitante' => 1,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 12,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 3,
                'id_time_visitante' => 10,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 14,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-10-10',
                'id_time_casa' => 5,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 6,
                'id_time_visitante' => 19,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 4,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 2,
                'id_time_visitante' => 13,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-09',
                'id_time_casa' => 20,
                'id_time_visitante' => 11,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-10-29',
                'id_time_casa' => 11,
                'id_time_visitante' => 14,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 10,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 18,
                'id_time_visitante' => 6,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 19,
                'id_time_visitante' => 12,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 8,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 9,
                'id_time_visitante' => 3,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 15,
                'id_time_visitante' => 4,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-10-18',
                'id_time_casa' => 16,
                'id_time_visitante' => 17,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-10-16',
                'id_time_casa' => 13,
                'id_time_visitante' => 7,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-10-17',
                'id_time_casa' => 1,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 17,
                'id_time_visitante' => 14,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-10-25',
                'id_time_casa' => 7,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 9,
                'id_time_visitante' => 1,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 4,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 5,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-10-22',
                'id_time_casa' => 16,
                'id_time_visitante' => 15,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 8,
                'id_time_visitante' => 3,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 2,
                'id_time_visitante' => 10,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 12,
                'id_time_visitante' => 11,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-10-23',
                'id_time_casa' => 13,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-10-27',
                'id_time_casa' => 11,
                'id_time_visitante' => 13,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-10-27',
                'id_time_casa' => 10,
                'id_time_visitante' => 16,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-10-26',
                'id_time_casa' => 18,
                'id_time_visitante' => 17,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-10-28',
                'id_time_casa' => 7,
                'id_time_visitante' => 4,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-10-28',
                'id_time_casa' => 12,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-10-28',
                'id_time_casa' => 3,
                'id_time_visitante' => 5,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-10-26',
                'id_time_casa' => 15,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 3,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-10-28',
                'id_time_casa' => 6,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-10-27',
                'id_time_casa' => 14,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-10-27',
                'id_time_casa' => 20,
                'id_time_visitante' => 19,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 1,
                'id_time_visitante' => 16,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-11-01',
                'id_time_casa' => 19,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 8,
                'id_time_visitante' => 4,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-11-03',
                'id_time_casa' => 9,
                'id_time_visitante' => 7,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 0,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 13,
                'id_time_visitante' => 20,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-11-01',
                'id_time_casa' => 10,
                'id_time_visitante' => 12,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-11-03',
                'id_time_casa' => 18,
                'id_time_visitante' => 14,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 3,
                'id_time_visitante' => 6,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 15,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 2,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-11-02',
                'id_time_casa' => 5,
                'id_time_visitante' => 17,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 3,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-11-05',
                'id_time_casa' => 11,
                'id_time_visitante' => 8,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-11-05',
                'id_time_casa' => 17,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Barueri'
            ],
            [
                'data' => '2022-11-06',
                'id_time_casa' => 12,
                'id_time_visitante' => 9,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-11-06',
                'id_time_casa' => 14,
                'id_time_visitante' => 19,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-11-06',
                'id_time_casa' => 4,
                'id_time_visitante' => 18,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-11-08',
                'id_time_casa' => 6,
                'id_time_visitante' => 10,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-11-06',
                'id_time_casa' => 20,
                'id_time_visitante' => 15,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-11-06',
                'id_time_casa' => 7,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-11-05',
                'id_time_casa' => 2,
                'id_time_visitante' => 3,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-11-05',
                'id_time_casa' => 16,
                'id_time_visitante' => 13,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 4,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
            [
                'data' => '2022-11-09',
                'id_time_casa' => 1,
                'id_time_visitante' => 19,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Aderbal Ramos da Silva'
            ],
            [
                'data' => '2022-11-11',
                'id_time_casa' => 10,
                'id_time_visitante' => 17,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Olímpico Nilton Santos'
            ],
            [
                'data' => '2022-11-10',
                'id_time_casa' => 7,
                'id_time_visitante' => 16,
                'gols_time_casa' => 6,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-11-09',
                'id_time_casa' => 2,
                'id_time_visitante' => 11,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-11-10',
                'id_time_casa' => 5,
                'id_time_visitante' => 15,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Antonio Accioly'
            ],
            [
                'data' => '2022-11-11',
                'id_time_casa' => 6,
                'id_time_visitante' => 12,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Governador Magalhães Pinto'
            ],
            [
                'data' => '2022-11-10',
                'id_time_casa' => 8,
                'id_time_visitante' => 18,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Alfredo Jaconi'
            ],
            [
                'data' => '2022-11-10',
                'id_time_casa' => 9,
                'id_time_visitante' => 13,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Allianz Parque'
            ],
            [
                'data' => '2022-11-09',
                'id_time_casa' => 3,
                'id_time_visitante' => 20,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Cícero Pompeu de Toledo'
            ],
            [
                'data' => '2022-11-09',
                'id_time_casa' => 4,
                'id_time_visitante' => 14,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Major Antônio Couto Pereira'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 17,
                'id_time_visitante' => 7,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Urbano Caldeira'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 19,
                'id_time_visitante' => 8,
                'gols_time_casa' => 4,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Governador Plácido Castelo'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 12,
                'id_time_visitante' => 4,
                'gols_time_casa' => 2,
                'gols_time_visitante' => 1,
                'estadio' => 'Arena Pantanal'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 15,
                'id_time_visitante' => 10,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Arena da Baixada'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 20,
                'id_time_visitante' => 9,
                'gols_time_casa' => 3,
                'gols_time_visitante' => 0,
                'estadio' => 'Estádio Beira-Rio'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 11,
                'id_time_visitante' => 3,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 4,
                'estadio' => 'Estádio Serra Dourada'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 18,
                'id_time_visitante' => 1,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 2,
                'estadio' => 'Estádio Jornalista Mário Filho'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 13,
                'id_time_visitante' => 5,
                'gols_time_casa' => 1,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Raimundo Sampaio'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 14,
                'id_time_visitante' => 6,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Neo Química Arena'
            ],
            [
                'data' => '2022-11-13',
                'id_time_casa' => 16,
                'id_time_visitante' => 2,
                'gols_time_casa' => 0,
                'gols_time_visitante' => 1,
                'estadio' => 'Estádio Nabi Abi Chedid'
            ],
        ];

        // Sort partidas by date to ensure chronological order
        usort(array: $partidas, callback: function ($a, $b): int {
            return strtotime(datetime: $a['data']) - strtotime(datetime: $b['data']);
        });

        $classificacaoController = app(abstract: ClassificacaoController::class);

        try {
            foreach ($partidas as $partida) {
                DB::beginTransaction();
                $newPartida = Partida::create([
                    'data' => Carbon::parse($partida['data']),
                    'id_time_casa' => $partida['id_time_casa'],
                    'id_time_visitante' => $partida['id_time_visitante'],
                    'gols_time_casa' => $partida['gols_time_casa'],
                    'gols_time_visitante' => $partida['gols_time_visitante'],
                    'estadio' => $partida['estadio']
                ]);
                // Update classification after each match
                $classificacaoController->store(partida: $newPartida);
                DB::commit();
            }
        } catch (\Exception $e) {
            echo $e;
            DB::rollBack();
        }
    }
}
