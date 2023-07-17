<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome", 
        "instituicao", //CAPS
        "email", 
        "senha",
        "cpf"
    ];
 
    public function alunos(){
        return $this->belongsToMany(Aluno::class);
      //Um psicologo poderá atender mais de um aluno 
      //Um aluno poderá ser atendido por mais de um psicólogo
    }

}
