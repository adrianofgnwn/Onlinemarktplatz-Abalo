<?php

use App\Http\Controllers\AbTestDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {return view('welcome');});

//1)
Route::get('/testdata', [AbTestDataController::class, 'index']);

//2)
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/isloggedin', [App\Http\Controllers\AuthController::class, 'isloggedin'])->name('haslogin');


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
