<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrientadorController;
use App\Http\Controllers\PsicologoController;
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
//-----------------------------Aluno------------------------------------//
//Atenção: rota será encontrada através do que for definido em "name" 
Route::get('/alunos', [AlunoController::class, 'index'])->name('index');

Route::get('/aluno/{id}', [AlunoController::class, 'show'])->name('show');

Route::get('/aluno', [AlunoController::class, 'create'])->name('create');
Route::post('/aluno', [AlunoController::class, 'store'])->name('store');

Route::get('/aluno/{id}/edit_aluno', [AlunoController::class, 'edit'])->name('edit_aluno');
Route::post('/aluno/{id}/update_aluno', [AlunoController::class, 'update'])->name('update_aluno');

Route::get('/aluno/{id}/delete_aluno', [AlunoController::class, 'delete'])->name('delete_aluno');
Route::post('/aluno/{id}/destroy_aluno', [AlunoController::class, 'destroy'])->name('destroy_aluno');

//-----------------------------Orientador-------------------------------------//
Route::get('/orientadores', [OrientadorController::class, 'index'])->name('index');

Route::get('/orientador/{id}', [OrientadorController::class, 'show'])->name('show');

Route::get('/orientador', [OrientadorController::class, 'create'])->name('create');
Route::post('/orientador', [OrientadorController::class, 'store'])->name('store');

Route::get('/orientador/{id}/edit_orientador', [OrientadorController::class, 'edit'])->name('edit_orientador');
Route::post('/orientador/{id}/update_orientador', [OrientadorController::class, 'update'])->name('update_orientador');

Route::get('/orientador/{id}/delete_orientador', [OrientadorController::class, 'delete'])->name('delete_orientador');
Route::post('/orientador/{id}/destroy_orientador', [OrientadorController::class, 'destroy'])->name('destroy_orientador');


//-----------------------------Psicólogo-------------------------------------//
Route::get('/psicologos', [PsicologoController::class, 'index'])->name('index');

Route::get('/psicologo/{id}', [PsicologoController::class, 'show'])->name('show');

Route::get('/psicologo', [PsicologoController::class, 'create'])->name('create');
Route::post('/psicologo', [PsicologoController::class, 'store'])->name('store');

Route::get('/psicologo/{id}/edit_psicologo', [PsicologoController::class, 'edit'])->name('edit_psicologo');
Route::post('/psicologo/{id}/update_psicologo', [PsicologoController::class, 'update'])->name('update_psicologo');
