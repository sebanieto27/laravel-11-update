<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Dashboard\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('test', [TestController::class, 'test'])->name('test');

Route::resource('post', PostController::class);
