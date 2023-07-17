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
    public function orientador(){
        return $this->belongsTo(Orientador::class);
      //a princípio, um aluno poderá ser cuidado por apenas um orientador
      //o orientador terá cadastro único dentro da escola (apenas um registro)
    }

    public function psicologos(){
        return $this->belongsToMany(Psicologo::class, 'aluno_psicologo', 'aluno_id', 'psicologo_id');
      //Um psicologo poderá atender mais de um aluno 
      //Um aluno poderá ser atendido por mais de um psicólogo
    }
}
