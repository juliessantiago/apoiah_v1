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

    public function create(){
        return view('psicologo_create');
    }

    public function store(Request $request){
        //\Log::info('entrou na funcao de criacao');
        $psicologo = new Psicologo();
        $array_input_request = $request->all();
        $psicologo->fill($array_input_request);
        $psicologo->save();
        
        if($psicologo->save()){
            // dump('novo aluno criado');
            return view('psicologos', ['psicologos'=>$this->psicologo->all()]);
        }else{
            dump('não foi possível salvar');
        }
    }

}