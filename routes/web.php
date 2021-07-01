<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PedidoController;
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

Route::get('/home', [PedidoController::class, 'index'])->name('home');
Route::post('/pedido', [PedidoController::class, 'store'])->name('realizar_pedido');
Route::get('/pedido', [PedidoController::class, 'listar'])->name('listar_pedidos');


Route::get('/register', [RegisterController::class, 'create_view']);
Route::post('/register',[RegisterController::class, 'create'])->name('register');

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
