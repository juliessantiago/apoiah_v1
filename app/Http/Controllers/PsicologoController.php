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
    
    
    public function index(){
        return view('psicologos', ['psicologos'=>$this->psicologo->all()]);
    }

    public function show($id){
        return view('psicologo', ['psicologo' => Psicologo::find($id)]);
    }
}