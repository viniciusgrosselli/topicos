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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'estado', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',               ['as'=>'estado',           'uses'=>'EstadoController@index']);
    Route::get('create',         ['as'=>'estado.create',    'uses'=>'EstadoController@create']);
    Route::get('{id}/destroy',   ['as'=>'estado.destroy',   'uses'=>'EstadoController@destroy']);
    Route::get('{id}/edit',      ['as'=>'estado.edit',      'uses'=>'EstadoController@edit']);
    Route::put('{id}/update',    ['as'=>'estado.update',    'uses'=>'EstadoController@update']);
    Route::post('store',         ['as'=>'estado.store',     'uses'=>'EstadoController@store']);
});

Route::group(['prefix'=>'cidade', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',              ['as'=>'cidade',            'uses'=>'CidadeController@index']);
    Route::get('create',        ['as'=>'cidade.create',     'uses'=>'CidadeController@create']);
    Route::get('{id}/destroy',  ['as'=>'cidade.destroy',    'uses'=>'CidadeController@destroy']);
    Route::get('{id}/edit',     ['as'=>'cidade.edit',       'uses'=>'CidadeController@edit']);
    Route::put('{id}/update',   ['as'=>'cidade.update',     'uses'=>'CidadeController@update']);
    Route::post('store',        ['as'=>'cidade.store',      'uses'=>'CidadeController@store']);
});
Route::group(['prefix'=>'pessoa', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',              ['as'=>'pessoa',            'uses'=>'PessoaController@index']);
    Route::get('create',        ['as'=>'pessoa.create',     'uses'=>'PessoaController@create']);
    Route::get('{id}/destroy',  ['as'=>'pessoa.destroy',    'uses'=>'PessoaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'pessoa.edit',       'uses'=>'PessoaController@edit']);
    Route::put('{id}/update',   ['as'=>'pessoa.update',     'uses'=>'PessoaController@update']);
    Route::post('store',        ['as'=>'pessoa.store',      'uses'=>'PessoaController@store']);
});

Route::group(['prefix'=>'servico', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',              ['as'=>'servico',            'uses'=>'ServicoController@index']);
    Route::get('create',        ['as'=>'servico.create',     'uses'=>'ServicoController@create']);
    Route::get('{id}/destroy',  ['as'=>'servico.destroy',    'uses'=>'ServicoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'servico.edit',       'uses'=>'ServicoController@edit']);
    Route::put('{id}/update',   ['as'=>'servico.update',     'uses'=>'ServicoController@update']);
    Route::post('store',        ['as'=>'servico.store',      'uses'=>'ServicoController@store']);
});