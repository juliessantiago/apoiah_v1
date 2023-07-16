<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('psicologos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nome');
            $table->text('instituicao');
            $table->text('email');
            $table->text('senha');
            $table->text('cpf');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psicologo');
    }
};
