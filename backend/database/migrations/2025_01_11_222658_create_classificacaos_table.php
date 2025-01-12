<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('classificacoes', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('time_id');
            $table->integer('ano');
            $table->integer('pontos');
            $table->integer('jogos');
            $table->integer('vitorias');
            $table->integer('empates');
            $table->integer('derrotas');
            $table->integer('gols_pro');
            $table->integer('gols_contra');
            $table->integer('saldo_gols');
            $table->date('data_atualizacao');
            $table->timestamps();

            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
            // Composite unique key to ensure one record per team per date per year
            $table->unique(['time_id', 'ano', 'data_atualizacao']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classificacoes');
    }
};
