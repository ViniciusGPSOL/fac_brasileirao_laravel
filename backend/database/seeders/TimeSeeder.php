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
            ['id' => 1, 'nome' => 'Avaí FC'],
            ['id' => 2, 'nome' => 'Fluminense'],
            ['id' => 3, 'nome' => 'São Paulo'],
            ['id' => 4, 'nome' => 'Coritiba FC'],
            ['id' => 5, 'nome' => 'Atlético-GO'],
            ['id' => 6, 'nome' => 'Atlético-MG'],
            ['id' => 7, 'nome' => 'Fortaleza'],
            ['id' => 8, 'nome' => 'Juventude'],
            ['id' => 9, 'nome' => 'Palmeiras'],
            ['id' => 10, 'nome' => 'Botafogo'],
            ['id' => 11, 'nome' => 'Goiás'],
            ['id' => 12, 'nome' => 'Cuiabá-MT'],
            ['id' => 13, 'nome' => 'América-MG'],
            ['id' => 14, 'nome' => 'Corinthians'],
            ['id' => 15, 'nome' => 'Athletico-PR'],
            ['id' => 16, 'nome' => 'RB Bragantino'],
            ['id' => 17, 'nome' => 'Santos'],
            ['id' => 18, 'nome' => 'Flamengo'],
            ['id' => 19, 'nome' => 'Ceará SC'],
            ['id' => 20, 'nome' => 'Internacional']
        ];

        foreach ($times as $time) {
            Time::updateOrCreate(
                ['id' => $time['id']],
                ['nome' => $time['nome']]
            );
        }
    }
}
