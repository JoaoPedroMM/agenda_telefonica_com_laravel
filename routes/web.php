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

Route::get('/contato/criar','ContatosController@criar');
Route::post('/contato/criar','ContatosController@salvar')->name('salvar_contato');
Route::get('/contato/lista','ContatosController@ver');
Route::get('/contato/excluir/{id}','ContatosController@deletar')->name('excluir_contato');
Route::get('/contato/editar/{id}','ContatosController@editar')->name('editar_contato');
Route::post('/contato/editar/{id}','ContatosController@atualizar')->name('atualizar_contato');
