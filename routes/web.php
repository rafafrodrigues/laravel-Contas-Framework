<?php

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
    return view('welcome');
});

//rotas referente Contas Pagar
Route::get('/contas', 'ContasPagarController@listar');

Route::get('/contas/cadastro', 'ContasPagarController@cadastro');

//rota do formulário
Route::post('/contas/salvar', 'ContasPagarController@salvar');

Route::get('/contas/editar/{id}', 'ContasPagarController@editar');
Route::post('/contas/update/{id}', 'ContasPagarController@update');

Route::get('/contas/deletar/{id}', 'ContasPagarController@deletar');

//rotas referente Contas Receber
Route::get('/contas/receber', 'ContasReceberController@listarReceber');

Route::get('/contas/receber/cadastro', 'ContasReceberController@cadastroReceber');

Route::post('/contas/receber/salvar', 'ContasReceberController@salvarReceber');

Route::get('/contas/receber/editar/{id}', 'ContasReceberController@editarReceber');
Route::post('/contas/receber/update/{id}', 'ContasReceberController@updateReceber');

Route::get('/contas/receber/deletar/{id}', 'ContasReceberController@deletarReceber');

Route::get('/contas/receber/dataCadastro', 'ContasReceberController@listaDataCadReceber');