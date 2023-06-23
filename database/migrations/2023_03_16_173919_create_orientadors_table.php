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
        Schema::create('orientadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nome');
            $table->text('email');
            $table->text('cpf');
            $table->text('escola');
            $table->text('senha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orientadors');
    }
};
