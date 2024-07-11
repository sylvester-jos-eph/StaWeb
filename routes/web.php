<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});
