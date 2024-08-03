<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'landing'])->name('landing');
Route::get('/pencarian/{query}', [ViewController::class, 'search'])->name('search');
Route::get('/detail/{id}', [ViewController::class, 'detail'])->name('detail');

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/auth/login', [AuthController::class, 'do_login'])->name('do_login');
Route::post('/auth/register', [AuthController::class, 'do_register'])->name('do_register');

Route::get('/auth/logout', [AuthController::class, 'do_logout'])->name('do_logout');

Route::resource('users',UserController::class);
Route::resource('books',BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('racks', RackController::class);
