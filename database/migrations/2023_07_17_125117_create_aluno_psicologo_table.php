<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //aluno_psicologo representa o prontuário com informações de cada consulta
    public function up(): void
    {
        Schema::create('aluno_psicologo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('aluno_id')->constrained();
            $table->foreignId('psicologo_id')->constrained();
            // $table->unsignedInteger('id_aluno');
            // $table->unsignedInteger('id_psicologo');
            $table->string('parecer');
            $table->timestamp('data_entrada')->nullable();
        });

        //alterando tabela para incluir as fk 

        // Schema::table('aluno_psicologo', function (Blueprint $table){
        //     $table->foreign('id_aluno')->references('id')->on('alunos')->onDelete('cascade');
        //     $table->foreign('id_psicologo')->references('id')->on('psicologos')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_psicologo');
    }
};
