<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/rebootcom', [PageController::class, 'rebootcom'])->name('rebootcom');
Route::get('/portofolio', [PageController::class, 'portofolio'])->name('portofolio');
Route::get('/price', [PageController::class, 'price'])->name('price');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
