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
            $table->foreignId('aluno_id')->constrained()->onDelete('cascade');
            $table->foreignId('psicologo_id')->constrained()->onDelete('cascade');
            $table->string('parecer');
            $table->timestamp('data_entrada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_psicologo');
    }
};
