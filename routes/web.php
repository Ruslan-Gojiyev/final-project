<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('test');
});

Route::get('test', [HousesController::class,'index'])->name('test');

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

Route::get('hello', function () {
    echo 'Hello World';
})->middleware('can:test-gate');

Route::get('world', [
    HelloController::class, 'index'
]);


Route::get('articles', [
    ArticleController::class, 'index'
]);

Route::get('articles/{article}', [
    ArticleController::class, 'update'
]);

Route::get('main', function () {
    return view('main');
})->name('main');



Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('home', function () {
    return view('home');
})->name('home');
