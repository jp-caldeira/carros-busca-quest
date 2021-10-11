<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [CarroController::class, 'listar'])->name('lista-carros');

Route::get("/carros/captura", [CarroController::class, 'capturar'])->name('capturar-carros');

Route::get('/carros/excluir{id}', [CarroController::class, 'excluir'])->name('excluir-carro');

Route::get("/usuarios", [UsuarioController::class, 'exibirUsuarios'])->name("exibir-usuarios");

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/auth', [UsuarioController::class,'login']);

Route::post('/auth', [UsuarioController::class,'auth'])->name('user-auth');





