<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pindahHalaman', function () {
    return view('pindahHalaman');
});