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

Route::get('/uts-home', function () {
    return view('uts.home');
});

Route::get('/uts-produk', function () {
    $products = [
        [
            'kode_produk' => 'BRG001',
            'nama_produk' => 'Pena',
            'jenis_produk' => 'Alat Tulis',
            'harga' => 20000
        ],
        [
            'kode_produk' => 'BRG002',
            'nama_produk' => 'Buku',
            'jenis_produk' => 'Alat Tulis',
            'harga' => 15000

        ]
    ];
    return view('uts.produk', compact('products'));
});

Route::get('/uts-tambah-produk', function () {
    return view('uts.tambah-produk');
});