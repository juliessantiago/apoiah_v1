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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('num_protoc');
            $table->text('nome');
            $table->text('sobrenome');
            $table->text('cpf');
            $table->text('matricula');
            $table->integer('idade');
            $table->text('turma');
            $table->boolean('vulner_social')->default(false);
            $table->text('data_nasc');
            $table->enum('turno', ['manha', 'tarde', 'noite']);
            $table->text('motivo_enc');
            $table->text('responsavel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
