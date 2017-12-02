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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/pacientes', 'PacientesController@index')->name('pacientes');
Route::post('/pacientes/form/save', 'PacientesController@adicionar')->name('pacientes_form_save');

Route::get('/consultas', function () {
    return view('admin.consultas');
})->name('consultas');

Route::get('/pacientes', function () {
    return view('admin.pacientes');
})->name('pacientes');


