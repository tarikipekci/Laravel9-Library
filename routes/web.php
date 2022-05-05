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

Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');


//Admin Category Side//
    Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/show/{id}',  'show')->name('show');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });

    //Admin Product Side//
    Route::prefix('product')->name('product.')->controller(\App\Http\Controllers\AdminPanel\AdminProductController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/show/{id}',  'show')->name('show');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });


    //Admin Product Image Side//
    Route::prefix('image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function () {
        Route::get('/{pid}',  'index')->name('index');
        Route::get('/create/{pid}',  'create')->name('create');
        Route::post('/store/{pid}',  'store')->name('store');
        Route::post('/update/{pid}/{id}',  'update')->name('update');
        Route::get('/destroy/{pid}/{id}',  'destroy')->name('destroy');
    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
