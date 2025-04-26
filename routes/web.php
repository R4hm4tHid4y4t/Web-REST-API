<?php

use Illuminate\Support\Facades\Route;

// Route homepage sederhana
Route::get('api/rapidapi.com', function () {
    return 'Selamat datang di halaman utama! Salam dari Rahmat Hidayat';
});

// Route dengan parameter wajib
Route::get('/user/{id}', function ($id) {
    return "Menampilkan data user dengan ID: $id";
});

// Route POST sederhana untuk menerima data
Route::post('/submit', function () {
    return 'Data berhasil dikirim!';
});
