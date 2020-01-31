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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/Edificios', 'EdificioController');
Route::resource('/Pisos', 'PisoController');
Route::resource('/Areas', 'AreaController');
Route::resource('/Estantes', 'EstanteController');
Route::resource('/cajas', 'CajaController');