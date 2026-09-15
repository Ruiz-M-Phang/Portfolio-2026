<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OverMijController;
use App\Http\Controllers\ProjectenController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/over_mij', [OverMijController::class, 'index'])->name('over_mij');

Route::get('/projecten', [ProjectenController::class, 'index'])->name('projecten');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
