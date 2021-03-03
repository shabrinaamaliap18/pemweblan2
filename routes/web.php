<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tugas2', function () {
    return view('Tugas2');
});

Route::get('/about', function () {
    $nama = 'Shabrina Amalia Putri';
    return view('about', ['nama'=> $nama]);
});

Route::get('/for', function () {
    return view('for');
});

