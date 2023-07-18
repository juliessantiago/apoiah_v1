<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        try{
            $request->validate([
                'email' => 'required | email | exists:users', 
                'password' => 'required | string'
            ]);
            $user = User::where('email', $request->email)->first();
            if(!Hash::check($request->password, $user->password)){
                throw new Exception('Senha informada está incorreta');
            }
            $response = $user->createToken($request->email)->plainTextToken;
            return response()->json(['token' => $response]);
        }catch (Exception $error){
            return response()->json([
                'Erro' => $error->getMessage()
            ], 401);
        }
    }
}
