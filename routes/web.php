<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/here', '/home');


Route::get('/home', function () {
    return view('home.index');
});


Route::get('/', [HomeController::class, 'index']);


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/references', [HomeController::class, 'references'])->name('references');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');

Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');


//Admin

Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');

    Route::get('/setting', [\App\Http\Controllers\Admin\HomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [\App\Http\Controllers\Admin\HomeController::class, 'settingUpdate'])->name('setting.update');

//Admin Category Side//
    Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //Admin Product Side//
    Route::prefix('product')->name('product.')->controller(\App\Http\Controllers\AdminPanel\AdminProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });


    //Admin Product Image Side//
    Route::prefix('image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
