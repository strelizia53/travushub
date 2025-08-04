<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//route for home
Route::view('/', 'pages.home')->name('home');
// reigster route
Route::get('/register', function () {
    return view('pages.auth.register');
})->middleware('guest')->name('register');
Route::get('/login', function () {
    return view('pages.auth.login');
})->middleware('guest')->name('login');
Route::view('/profiel', 'pages.profile')->name('profile'); 
// to implement the profile page
