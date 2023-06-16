<?php

namespace App\Http\Controllers;
use App\Models\Orientador;
use Illuminate\Http\Request;

class OrientadorController extends Controller
{
    private $orientador; 
    public function __construct(){
        $this->orientador = new Orientador();
    }
    public function index(){
        return view('orientadores', ['orientadores'=>$this->orientador->all()]);
    }
}
