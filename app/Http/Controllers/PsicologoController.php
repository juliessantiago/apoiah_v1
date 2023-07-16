<?php

namespace App\Http\Controllers;
use App\Models\Psicologo;
use Illuminate\Http\Request;

class PsicologoController extends Controller
{
    private $psicologo; 
    public function __construct(){
        $this->psicologo = new Psicologo();
    }
    

}