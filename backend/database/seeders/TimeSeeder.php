<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times = [
            ['nome' => 'Avaí FC', 'estadio' => 'Estádio da Ressacada', 'cidade' => 'Florianópolis'],
            ['nome' => 'Fluminense', 'estadio' => 'Maracanã', 'cidade' => 'Rio de Janeiro'],
            ['nome' => 'São Paulo', 'estadio' => 'Morumbi', 'cidade' => 'São Paulo'],
            ['nome' => 'Coritiba FC', 'estadio' => 'Couto Pereira', 'cidade' => 'Curitiba'],
            ['nome' => 'Atlético-GO', 'estadio' => 'Antônio Accioly', 'cidade' => 'Goiânia'],
            ['nome' => 'Atlético-MG', 'estadio' => 'Mineirão', 'cidade' => 'Belo Horizonte'],
            ['nome' => 'Fortaleza', 'estadio' => 'Castelão', 'cidade' => 'Fortaleza'],
            ['nome' => 'Juventude', 'estadio' => 'Alfredo Jaconi', 'cidade' => 'Caxias do Sul'],
            ['nome' => 'Palmeiras', 'estadio' => 'Allianz Parque', 'cidade' => 'São Paulo'],
            ['nome' => 'Botafogo', 'estadio' => 'Nilton Santos', 'cidade' => 'Rio de Janeiro'],
            ['nome' => 'Goiás', 'estadio' => 'Serrinha', 'cidade' => 'Goiânia'],
            ['nome' => 'Cuiabá-MT', 'estadio' => 'Arena Pantanal', 'cidade' => 'Cuiabá'],
            ['nome' => 'América-MG', 'estadio' => 'Independência', 'cidade' => 'Belo Horizonte'],
            ['nome' => 'Corinthians', 'estadio' => 'Neo Química Arena', 'cidade' => 'São Paulo'],
            ['nome' => 'Athletico-PR', 'estadio' => 'Arena da Baixada', 'cidade' => 'Curitiba'],
            ['nome' => 'RB Bragantino', 'estadio' => 'Nabi Abi Chedid', 'cidade' => 'Bragança Paulista'],
            ['nome' => 'Santos', 'estadio' => 'Vila Belmiro', 'cidade' => 'Santos'],
            ['nome' => 'Flamengo', 'estadio' => 'Maracanã', 'cidade' => 'Rio de Janeiro'],
            ['nome' => 'Ceará SC', 'estadio' => 'Castelão', 'cidade' => 'Fortaleza'],
            ['nome' => 'Internacional', 'estadio' => 'Beira-Rio', 'cidade' => 'Porto Alegre']
        ];

        foreach ($times as $time) {
            Time::updateOrCreate(
                ['nome' => $time['nome']],
                ['estadio' => $time['estadio'], 'cidade' => $time['cidade']]
            );
        }
    }
}
