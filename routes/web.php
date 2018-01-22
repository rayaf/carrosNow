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
    return view('index');
});

Route::get('/carros', 'CarroController@lista');
Route::get('/carros/mostra/{id}',
	'CarroController@mostra')->
	where('id', '[0-9]+');
Route::get('/carros/novo', 'CarroController@novo');
Route::get('/carros/remove/{id}', 'CarroController@remove');
Route::get('/carros/altera/{id}', 'CarroController@altera')->
	where('id', '[0-9]+');
Route::post('carros/atualiza/{id}', 'CarroController@atualiza');
Route::post('/carros/adiciona', 'CarroController@adiciona');

Route::get('/marcas', 'MarcaController@lista');
Route::get('/marcas/novo', 'MarcaController@novo');
Route::post('/marcas/adiciona', 'MarcaController@adiciona');
Route::get('/marcas/remove/{id}', 'MarcaController@remove');
Route::get('/marcas/altera/{id}', 'MarcaController@altera')->
	where('id', '[0-9]+');
Route::post('/marcas/atualiza/{id}', 'MarcaController@atualiza');
