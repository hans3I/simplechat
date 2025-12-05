<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Conversation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [Authentication::class, 'show_register'])->name('register.form');
Route::post('/register', [Authentication::class, 'register'])->name('register');

Route::get('/login', [Authentication::class, 'show_login'])->name('login.form');
Route::post('/login', [Authentication::class, 'login'])->name('login');

Route::post('/logout', [Authentication::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/conversations', [Conversation::class, 'index'])->name('conversations.index');
});
