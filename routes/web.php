<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//route for home
Route::view('/', 'pages.home')->name('home');
// register route
Route::get('/register', function () {
    return view('pages.auth.register');
})->middleware('guest')->name('register');
// login route
Route::get('/login', function () {
    return view('pages.auth.login');
})->middleware('guest')->name('login'); 
//profile route
Route::view('/profie', 'pages.profile')->name('profile'); 
// to implement the profile page
