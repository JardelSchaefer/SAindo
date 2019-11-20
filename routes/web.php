<?php

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

Route::get('/','indexController@index');
Route::resource('/cronometragem','CronometragemController');
//rotas crud
Route::resource('/operacao','OperacaoController');
Route::resource('usuario','UsuarioController');
Route::resource('/produto','ProdutoController');
Route::resource('sequencia','SequenciaController');
Route::resource('tomada-Tempo','TomadaTempoController');
Route::resource('/listagemCronometro','ListagemCronometroController');