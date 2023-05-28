<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunoController::class, 'index']); 
Route::get('/aluno/{id}', [AlunoController::class, 'show']);
Route::get('/aluno', [AlunoController::class, 'create']); //exibição de formulário
Route::post('/aluno', [AlunoController::class, 'store']);
Route::post('/aluno/{id}/update', [AlunoController::class, 'update']);

