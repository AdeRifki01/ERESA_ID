<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('Home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/rebootcom', fn() => view('rebootcom'))->name('rebootcom');
Route::get('/portofolio', fn() => view('portofolio'))->name('portofolio');
Route::get('/price', fn() => view('price'))->name('price');
Route::get('/contact', fn() => view('contact'))->name('contact');
