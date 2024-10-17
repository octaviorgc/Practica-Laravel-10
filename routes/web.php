<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practica', function () {
    return view('practica');
});

Route::get('/prueba', function () {
    return view('prueba.testeo');
});

Route::get('/poli', function () {
    return view('poli');
});

Route::get('/animales', function () {
    return view('animales');
});

Route::get('/vehiculos', function () {
    return view('vehiculos');
});

