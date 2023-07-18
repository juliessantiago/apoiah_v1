<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Api\Auth\UserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $novoUsuario = $request->all();
            $novoUsuario['password'] = password_hash($novoUsuario['password'], PASSWORD_DEFAULT);
            $response = [
                'mensagem' => 'Usuário cadastrado', 
                'usuário' => User::create($novoUsuario),
            ];
            $status = 200; 
        }catch(\Exception $error){
            $response = [
                'Erro' => $error->getMessage()
            ];
            $status = 500; 
        }
        return response()->json($response, $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
