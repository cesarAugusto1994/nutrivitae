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
    return view('home');
});

Route::get('/sobre-nos', function () {
    return view('home');
})->name('sobre');

Route::get('/plano/{id}', function ($id) {
    return view('home');
})->name('plano');

Route::get('/precos', function () {
    return view('site.precos');
})->name('precos');
