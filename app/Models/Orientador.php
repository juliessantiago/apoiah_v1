<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome", 
        "escola", 
        "email", 
        "senha",
        "cpf"
    ];

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }
}
