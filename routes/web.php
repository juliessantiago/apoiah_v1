<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/alunos', [AlunoController::class, 'index'])->name('index');

Route::get('/aluno/{id}', [AlunoController::class, 'show'])->name('show');
Route::get('/aluno', [AlunoController::class, 'create'])->name('create');

Route::get('/aluno/{id}/edit', [AlunoController::class, 'edit'])->name('edit');
Route::post('/aluno/{id}/update', [AlunoController::class, 'update'])->name('update');

Route::get('/aluno/{id}/delete', [AlunoController::class, 'delete'])->name('delete');
Route::post('/aluno/{id}/destroy', [AlunoController::class, 'destroy'])->name('destroy');


Route::get('/orientadores', [OrientadorController::class, 'index'])->name('index');
