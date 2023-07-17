<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        return response ()->json(Aluno::all());
    }

    public function show($id){
        try{
            return response()->json(Aluno::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Aluno com id especificado não foi encontrado', 
                'Exception' => $error->getMessage(),
            ];
            $status = 404; 
            return response()->json($responseError, $status);
        }
    }

    public function store(Request $request){
        try{
            $aluno = $request->all();
            $novoAluno = Aluno::create($aluno);
            return response()->json([
                'mensagem' => 'Aluno inserido com sucesso', 
                'Aluno'=>$novoAluno,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível inserir novo aluno', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
      
    }

    public function update(Request $request, $id){
        try{
            $atualizacoes = $request->all();
            $aluno = Aluno::findOrFail($id);
            $aluno->update($atualizacoes);
            return response()->json([
                'mensagem' => 'Dados de aluno atualizados com sucesso', 
                'Aluno'=>$aluno,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível inserir novo aluno', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
        //código precisa de atualização para diferenciar um erro 404 (id não encontrado)
        //de um erro 422 (problema no formato requisição)
    }

    public function remove($id){
        try{
            if(Aluno::findOrFail($id)->delete())
            return response()->json([
                'mensagem' => 'Aluno foi excluido com sucesso', 
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível excluir aluno', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }


}
