<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MovimentacaoController;

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
    return view('welcome');
});



Route::resources([
    'contas' => ContaController::class,
    'categorias' => CategoriaController::class,
]);

Route::resource('movimentacoes', MovimentacaoController::class)->parameters(['movimentacoes'=>'movimentacao']);