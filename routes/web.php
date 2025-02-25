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

// Basic Route

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get ('/world', function () {
    return 'World';
});

Route::get ('/welcome', function () {
    return 'Selamat Datang';
});

Route::get ('/about', function () {
    return 'NIM 2341720100 <br> Dewita Anggraini';
});

//Parameter Route

Route::get ('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get ('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId." Komentar ke-: ".$commentId;
});

Route::get ('/articles/{id}', function ($Id) {
    return 'Halaman artikel dengan ID '.$Id;
});

// Optional Parameter

// Memasukkan parameternya di URL
Route::get ('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// Parameter sudah ditentukan di routes
Route::get ('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Route Name
Route::get ('/user/profile', function () {
    //
})->name('profile');