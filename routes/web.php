<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentoController;


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

// ROTA PARA USUÁRIO LOGADO


Route::get('/', function () {
    return view('auth.login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    //Rota extrato (
    Route::get('/extrato', function () {
        return view('extrato');
    }
    )->name('extrato');

    //Rota Seus Dados 
    Route::get('/seus_dados', function () {
        return view('seus_dados');
    }
    )->name('seus_dados');

    //Rota Nova Entrada - cadastro de receita ou despesa
    Route::get('/nova_entrada', function () {
        return view('nova_entrada');
    }
    )->name('nova_entrada');
    //Rota Seus Gastos - Gráfico de despesa X receitas 
    Route::get('/seus_gastos', function () {
        return view('seus_gastos');
    }
    )->name('seus_gastos');

    //Rota para inserção no BD dos movimentos
    Route::post('/processa',[MovimentoController::class,'gravar'])->name('processa');


});