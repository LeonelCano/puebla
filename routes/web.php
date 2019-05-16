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

Route::get('/', 'FrontHomeController@index')->name('inicio');
Route::get('inicio', 'FrontHomeController@index')->name('inicio');

Route::get('zonas', 'FrontHomeController@zonas')->name('zonas');
Route::get('zonas-{id}', 'FrontHomeController@verZona')->name('zona');

Route::get('atractivos', 'FrontHomeController@atractivos')->name('atractivos');
Route::get('atractivo-{id}', 'FrontHomeController@verAtractivo')->name('atractivo');

Route::get('recintos', 'FrontHomeController@recintos')->name('recintos');
Route::get('recinto-{id}', 'FrontHomeController@verRecinto')->name('recinto');

Route::get('eventos', 'FrontHomeController@eventos')->name('eventos');
Route::get('evento-{id}', 'FrontHomeController@verEvento')->name('evento');

Route::post('comentar', 'FrontHomeController@comentar')->name('comentar');

Route::get('acerca', 'FrontHomeController@acerca')->name('acerca');