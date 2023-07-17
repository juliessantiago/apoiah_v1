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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('psicologo_id')->constrained();
            $table->foreignId('aluno_id')->constrained();
            $table->string('parecer');
            $table->timestamp('data_entrada')->nullable();
        });
        //constrained para garantir integridade 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
    }
};
