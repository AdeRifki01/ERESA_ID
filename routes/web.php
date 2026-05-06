<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('homepage'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/portofolio', fn() => view('portofolio'))->name('portofolio');
Route::get('/price', fn() => view('price'))->name('price');
Route::get('/rebootcom', fn() => view('rebootcom'))->name('rebootcom');


Route::match(['get', 'post'], '/login', fn() => view('auth.login'))->name('login');
Route::get('/logout', fn() => view('auth.logout'))->name('logout');
Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
Route::get('/paket', fn() => view('admin.paket'))->name('paket');
Route::get('/pesan', fn() => view('admin.pesan'))->name('pesan');