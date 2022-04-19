<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/here', '/home');



Route::get('/', function () {
    return view('home.index');
});


Route::get('/home', [HomeController::class, 'index']);

//Admin
Route::get('/admin',  [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
