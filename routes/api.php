<?php

use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Api\OrientadorController;
use App\Http\Controllers\Api\PsicologoController;
use App\Http\Controllers\Api\UserController;
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

Route::get('/orientador', [OrientadorController::class, 'index']);
Route::get('/orientador/{id}', [OrientadorController::class, 'show']);
Route::post('/orientador', [OrientadorController::class, 'store']);
Route::patch('/orientador/{id}', [OrientadorController::class, 'update']);
Route::delete('/orientador/{id}', [OrientadorController::class, 'remove']);

Route::get('/psicologo', [PsicologoController::class, 'index']);
Route::get('/psicologo/{id}', [PsicologoController::class, 'show']);
Route::post('/psicologo', [PsicologoController::class, 'store']);
Route::patch('/psicologo/{id}', [PsicologoController::class, 'update']);
Route::delete('/psicologo/{id}', [PsicologoController::class, 'remove']);

Route::get('/psicologoAlunos/{id}', [PsicologoController::class, 'psicologoAlunos']);

Route::apiResource('users', UserController::class);