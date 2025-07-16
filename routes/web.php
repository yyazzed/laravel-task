<?php

use App\Http\Controllers\PageController;
require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'home'])->name('home');



Route::get('/about-us', [PageController::class, 'about'])->name('about');
use App\Http\Controllers\ContactController;

Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
