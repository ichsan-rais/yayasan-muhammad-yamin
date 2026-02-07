<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/program', function () {
    return view('pages.program');
});

Route::get('/galery', function () {
    return view('pages.galeri');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


