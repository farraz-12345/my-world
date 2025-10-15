<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/faraz', function () {
    return view('faraz');
});

Route::get('/halaman', function () {
    return view('halaman');
});

Route::get('/halaman2', function () {
    return view('halaman2');
});

Route::get('/about', function () {
    return "
        <h1>Halaman About</h1>
        <a href='/'>home</a>
    ";
});