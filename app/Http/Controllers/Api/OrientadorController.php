<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orientador;

class OrientadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response ()->json(Orientador::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $orientador = $request->all();
            $novoOrientador = Orientador::create($orientador);
            return response()->json([
                'mensagem' => 'Orientador inserido com sucesso', 
                'Orientador'=>$novoOrientador,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível inserir novo orientador', 
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
            return response()->json(Orientador::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Orientador com id especificado não foi encontrado', 
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
            $orientador = Orientador::findOrFail($id);
            $orientador->update($atualizacoes);
            return response()->json([
                'mensagem' => 'Dados de orientador atualizados com sucesso', 
                'Orientador'=>$orientador,
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível atualizar orientador', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            if(Orientador::findOrFail($id)->delete())
            return response()->json([
                'mensagem' => 'Orientador foi excluido com sucesso', 
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro' => 'Não foi possível excluir orientador', 
                'Exception' => $error->getMessage(),
            ];
            $status = 422;
            return response()->json($responseError, $status);
        }
    }
}
