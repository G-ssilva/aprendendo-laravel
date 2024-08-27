<?php

use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\ApartamentoMoradorController;
use App\Http\Controllers\CondominioController;
use App\Http\Controllers\MoradorController;
use App\Http\Controllers\PopularBancoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SindicoAtivoController;
use App\Http\Controllers\SindicoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/popularBanco', [PopularBancoController::class, 'popularBanco'])->name('popularBanco');

Route::get('/cadastroMorador', [MoradorController::class, 'index'])->name('cadastroMorador');
Route::post('/cadastrarMorador', [MoradorController::class, 'cadastrar'])->name('cadastrarMorador');

Route::get('/cadastroSindico', [SindicoController::class, 'index'])->name('cadastroSindico');
Route::post('/cadastrarSindico', [SindicoController::class, 'cadastrar'])->name('cadastrarSindico');

Route::get('/cadastroCondominio', [CondominioController::class, 'index'])->name('cadastroCondominio');
Route::post('/cadastrarCondominio', [CondominioController::class, 'cadastrar'])->name('cadastrarCondominio');

Route::get('/cadastroApartamento', [ApartamentoController::class, 'index'])->name('cadastroApartamento');
Route::post('/cadastrarApartamento', [ApartamentoController::class, 'cadastrar'])->name('cadastrarApartamento');


Route::get('/cadastroRole', [RoleController::class, 'index'])->name('cadastroRole');
Route::post('/cadastrarRole', [RoleController::class, 'cadastrar'])->name('cadastrarRole');

Route::get('/cadastroUsuario', [UsuarioController::class, 'index'])->name('cadastroUsuario');
Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrar'])->name('cadastrarUsuario');

Route::get('/definicaoSindicoAtivo', [SindicoAtivoController::class, 'index'])->name('definicaoSindicoAtivo');
Route::post('/definirSindicoAtivo', [SindicoAtivoController::class, 'definir'])->name('definirSindicoAtivo');

Route::get('/vinculoApartamentoMorador', [ApartamentoMoradorController::class, 'index'])->name('vinculoApartamentoMorador');
Route::post('/vincularApartamentoMorador', [ApartamentoMoradorController::class, 'vincular'])->name('vincularApartamentoMorador');
