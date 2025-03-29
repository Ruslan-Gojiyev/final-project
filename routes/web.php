<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
})->name('test');

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