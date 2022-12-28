<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/livro/create', [LivroController::class, 'create'])->name('livro.create');

Route::post('/livro/create', [LivroController::class, 'store'])->name('livro.salvar');

Route::get('/', [LivroController::class, 'listar'])->name('livro.listar');

Route::get('/livro/delete/{id}', [LivroController::class, 'destroy'])->name('livro.delete');

Route::get('livro/edit/{id}', [LivroController::class, 'edit'])->name('livro.edit');
Route::post('livro/edit/{id}', [LivroController::class, 'update'])->name('livro.atualizar');

Route::get('/livro/view/{id}', [LivroController::class, 'view'])->name('livro.visualizar');
