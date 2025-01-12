<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidas', function (Blueprint $table): void {
            $table->id();
            $table->date('data');
            $table->unsignedBigInteger('id_time_casa'); // Reference to times table
            $table->integer('gols_time_casa');
            $table->unsignedBigInteger('id_time_visitante'); // Reference to times table
            $table->integer('gols_time_visitante');
            $table->string('estadio', 128);
            $table->timestamps();

            // Adding foreign key constraints
            $table->foreign('id_time_casa')->references('id')->on('times')->onDelete('cascade');
            $table->foreign('id_time_visitante')->references('id')->on('times')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};
