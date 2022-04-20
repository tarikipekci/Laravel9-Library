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
//Admin Category Side//

Route::get('/admin/category',  [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create',  [\App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store',  [\App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('admin_category_store');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
