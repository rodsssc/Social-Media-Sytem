<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/profile', 'profile')->name('profile');
Route::view('/comment', 'comment')->name('comment');
Route::view('/profilesetting', 'profile-setting')->name('profileSetting');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
});
