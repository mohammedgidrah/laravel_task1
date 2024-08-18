<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('master');
});
Route::get('/chart', function () {
    return view('chart');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/form', function () {
    return view('form');
});

// Route::get('/register',function() {
//     return view('register');
//  });
 
//  Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
//  Route::get('/register', [App\Http\Controllers\UserRegistration::class, '@postRegister']);
Route::get('/products', [ProductController::class, 'test']);


// Route::get('/', PostController::class .'@index')->name('posts.index');

// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');

// Route::post('/posts', PostController::class .'@store')->name('posts.store');

// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');

// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');

// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');

// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');