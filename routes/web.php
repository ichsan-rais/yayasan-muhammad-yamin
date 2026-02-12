<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', fn() => view('bizland.home'));
Route::get('/profile', fn() => view('bizland.profile'));
Route::get('/galeri', fn() => view('bizland.gallery'));
Route::get('/team', fn() => view('bizland.team'));
Route::get('/contact', fn() => view('bizland.contact'));