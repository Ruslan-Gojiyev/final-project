<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HousesController::class,'index'])->name('home');

Route::get('rooms', [RoomsController::class, 'index'])->name('rooms');

Route::get('adminlogin', function () {
    return view('adminlogin');
})->name('adminlogin');

Route::get('login', [
    LoginController::class, 'loginForm'
])->name('login')->middleware('guest');

Route::post('login', [
    LoginController::class, 'login'
])->middleware('guest');

Route::get('register', [
    LoginController::class, 'registerForm'
])->name('register')->middleware('guest');

Route::post('register', [
    LoginController::class, 'register'
])->middleware('guest');

Route::get('logout', [
    LoginController::class, 'logout'
])->name('logout')->middleware('auth');


Route::get('main', function () {
    return view('main');
})->name('main');



Route::get('news', function () {
    return view('news');
})->name('news');
