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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/World', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'Halo, namaku Hanifah Amany dengan NIM 2241720127';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman artikel dengan ID '.$id;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya  '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
Route::get('/hello', [WelcomeController::class,'/hello']);
