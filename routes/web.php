<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


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

Route::get('/admin/category',  [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create',  [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store',  [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',  [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',  [AdminCategoryController::class, 'update'])->name('admin_category_update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
