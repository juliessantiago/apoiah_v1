<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoPsicologo extends Model
{
    use HasFactory;
    protected $fillable = [
        "id", 
        "aluno_id", 
        "psicologo_id",
        "parecer", 
        "data_entrada"
    ];

    

}
