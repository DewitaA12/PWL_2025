<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Modifikasi Route jika ada class controller
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/index', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles', [PageController::class,'articles']);

// Modifikasi dengan konsep Single Action Controller
Route::get('/home', [HomeController::class,'home']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);


Route::get ('/world', function () {
    return 'World';
});

Route::get ('/welcome', function () {
    return 'Selamat Datang';
});

// Route::get ('/about', function () {
//     return 'NIM 2341720100 <br> Dewita Anggraini';
// });

//Parameter Route

Route::get ('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get ('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId." Komentar ke-: ".$commentId;
});

// Route::get ('/articles/{id}', function ($Id) {
//     return 'Halaman artikel dengan ID '.$Id;
// });

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

// Resource Controller
Route::resource('photos', PhotoController::class);