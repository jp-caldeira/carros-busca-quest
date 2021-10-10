<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('index');
});

Route::get("/carros/captura", [CarroController::class, 'exibir'])->name('capturar-carros');

Route::get('/carros/lista', [CarroController::class, 'listar'])->name('lista-carros');

Route::get('/carros/excluir{id}', [CarroController::class, 'excluir'])->name('excluir-carro');


Route::get("/usuarios", [UsuarioController::class, 'exibirUsuarios'])->name("exibir-usuarios");





