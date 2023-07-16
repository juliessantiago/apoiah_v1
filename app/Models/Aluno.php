<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        "num_protoc",
        "nome", 
        "cpf",
        "matricula",
        "idade", 
        "turma",
        "vulner_social",
        "data_nasc",
        "turno", 
        "motivo_enc", 
        "responsavel", 
    ];
}
