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


Route::get('/consultas', function () {
    return view('admin.consultas');
})->name('consultas');


Route::get('patients', 'PatientsController@index')->name('patients');
Route::get('/patients/create/form', 'PatientsController@create')->name('patient_create');
Route::get('/patient/{id}', 'PatientsController@show')->name('patient_show');

Route::post('/patients/store', 'PatientsController@store')->name('patients_store');



