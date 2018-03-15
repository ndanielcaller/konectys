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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/datos', function () {
    return view('datos');
});

Route::get('/busqueda', function () {
    return view('busqueda');
});

Route::get('/busqueda-detalle', function () {
    return view('item_busqueda');
});
