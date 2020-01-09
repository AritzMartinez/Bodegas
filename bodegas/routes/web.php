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

//Mostrar las filas de las bodegas, ver el detalle y borrar una bodega
Route::get('/bodegas', 'BodegasController@index');
Route::get('/bodegas/{id}', 'BodegasController@show');
Route::get('/bodegas/{id}/delete', 'BodegasController@delete');

Route::get('/edit/bodega/{id}', 'BodegasController@edit');
Route::get('/update/bodega/{id}', 'BodegasController@update');

//Formulario para añadir bodegas
Route::get('/crear/bodega', 'BodegasController@create');
Route::post('/bodegas', 'BodegasController@store');


Route::get('/vinos', 'VinosController@index');
Route::get('/vinos/{id}', 'VinosController@show');
Route::get('/vinos/{id}/delete', 'VinosController@delete');


Route::get('/crear/vino/{id}', 'VinosController@create');
Route::post('/store/vino/{id}', 'VinosController@store');

Route::get('/edit/{id}', 'VinosController@edit');
Route::get('/update/{id}', 'VinosController@update');
