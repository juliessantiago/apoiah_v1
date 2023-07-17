<?php

use App\Http\Controllers\Api\AlunoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rotas devem ser acessadas com o prefixo /api
Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/aluno/{id}', [AlunoController::class, 'show']);
Route::post('/aluno', [AlunoController::class, 'store']);
Route::patch('/aluno/{id}', [AlunoController::class, 'update']);
Route::delete('/aluno/{id}', [AlunoController::class, 'remove']);