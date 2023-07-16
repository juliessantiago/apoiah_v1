<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrientadorController;

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

Route::get('/orientador/{id}/edit', [OrientadorController::class, 'edit'])->name('edit');
Route::post('/orientador/{id}/update', [OrientadorController::class, 'update'])->name('update');

Route::get('/orientador/{id}/delete', [OrientadorController::class, 'delete'])->name('delete');
Route::post('/orientador/{id}/destroy', [OrientadorController::class, 'destroy'])->name('destroy');