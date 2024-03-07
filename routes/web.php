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
    return 'Halo1 Selamat datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/World', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'Halo, namaku Hanifah Amany dengan NIM 2241720127';
});
