<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ergofit');
})->name('home');

Route::get('/team', function () {
    return view('smkn2-team');
})->name('team');

Route::get('/ergofit', function () {
    return view('ergofit');
})->name('ergofit');