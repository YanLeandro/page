<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/acerca-de', 'about')->name('about');

// RUTAS DEL TUTORIAL
// Route::get('/blog', 'BlogController@index')->name('blog.index');
// Route::get('/blog/{post:slug}', 'BlogController@show')->name('blog.show');

// RUTAS MÍAS
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::view('/contactos', 'contact')->name('contact');



