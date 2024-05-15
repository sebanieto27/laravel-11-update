<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('index', [IndexController::class, 'index']);

Route::get('contact', [IndexController::class, 'contact'])->name('contact');

Route::get('contact2', [IndexController::class, 'contact2'])->name('contact2');

Route::resource('post', IndexController::class);

Route::get('otro/{post}', [IndexController::class, 'otro']);
