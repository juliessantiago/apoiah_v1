<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Psicologo;

class PsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Psicologo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $psicologo = $request->all();
            $novoPsicologo = Psicologo::create($psicologo);
            return response()->json([
                'mensagem' => 'Psicologo inserido com sucesso', 
                'Psicologo'=>$novoPsicologo,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível inserir novo psicologo', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            return response()->json(Psicologo::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Psicólogo com id especificado não foi encontrado', 
                'Exception' => $error->getMessage(),
            ];
            $status = 404; 
            return response()->json($responseError, $status);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $atualizacoes = $request->all();
            $psicologo = Psicologo::findOrFail($id);
            $psicologo->update($atualizacoes);
            return response()->json([
                'mensagem' => 'Dados de psicólogo atualizados com sucesso', 
                'Psicólogo'=>$psicologo,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível atualizar psicólogo', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(string $id)
    {
        try{
            if(Psicologo::findOrFail($id)->delete())
            return response()->json([
                'mensagem' => 'Psicólogo foi excluido com sucesso', 
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível excluir psicólogo', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }

    //retorna alunos que foram atendidos pelo psicólogo
    public function psicologoAlunos($id){
        try{
            return response ()->json(Psicologo::findOrFail($id)->alunos);

        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Psicólogo com id especificado não foi encontrado', 
                'Exception' => $error->getMessage(),
            ];
            $status = 404; 
            return response()->json($responseError, $status);
        }
        
    }
}
