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
    
    public function create(){
        return view('orientador_create');
    }

    public function show($id){
        return view('orientador', ['orientador' => Orientador::find($id)]);
    }
    // public function store(Request $request){
    //     \Log::info('entrou na funcao de criacao');
    //     $orientador = new Orientador();
    //     $array_input_request = $request->all();
    //     $orientador->fill($array_input_request);
    //     $orientador->save();
        
    //     if($orientador->save()){
    //         dump('novo orientador criado');
    //     }else{
    //         dump('não foi possível salvar');
    //     }
    // }

    public function index(){
        return view('orientadores', ['orientadores'=>$this->orientador->all()]);
    }

    public function edit($id){
        return view('orientador_edit', ['aluno' => Orientador::find($id)]);
    }

    public function update(Request $request, $id){
        $orientador = $request->all(); //por que all()
        if(Orientador::find($id)->update($orientador)){
            dump("Dados do orientador atualizados com sucesso");
            return redirect('/orientadores');
        }else{
            dump("Erro, não foi possível atualizar dados do orientador");
        }
    }
    public function delete($id){ //exibe página para confirmar exclusão
        return view('aluno_delete_confirm', ['aluno' => Orientador::find($id)]);
    }


}
