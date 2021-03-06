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

Route::get('/usuarios', 'UsuariosController@index');

Route::get('/clientes', 'ClientesController@index');

Route::get('/clientes/novo', 'ClientesController@novo');


Route::group(['middleware' => 'web'], function(){
    Route::get('/', 'HomeController@index');

    Route::auth();

    Route::get('/home', 'HomeController@index');
});
