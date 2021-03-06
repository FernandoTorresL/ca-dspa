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

Route::get('/', 'PagesController@home');

Route::get('/detalle_ctas/{detalle_cta}', 'DetalleCtasController@show');

Route::get('/solicitudes/{solicitud}', 'SolicitudesController@show');

Route::post('/solicitudes/create', 'SolicitudesController@create');

Auth::routes();
