<?php

use App\Http\Controllers\AdminPanel\BorrowController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use \App\Http\Controllers\ShopCartController;

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

Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//point

Route::get('/productlist', [HomeController::class, 'productlist'])->name('productlist');

//

Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');

Route::view('/loginuser', 'home.login')->name('loginuser');

Route::view('/registeruser', 'home.register');

Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');

Route::view('/loginadmin', 'admin.login')->name('loginadmin');

Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');

Route::get('/order/{id}', [HomeController::class, 'order'])->name('order');

Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');


Route::middleware('auth')->group(function () {

    //User Panel

    Route::prefix('userpanel')->prefix('userpanel')->name('userpanel.')->controller(\App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
        Route::get('/orders', 'orders')->name('orders');
        Route::get('/orderdetail/{id}', 'orderdetail')->name('orderdetail');
        Route::get('/cancelproduct/{id}', 'cancelproduct')->name('cancelproduct');
    });


    //Borrow Side

    Route::prefix('/shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/add/{id}', 'add')->name('add');
        Route::post('/storeorder', 'storeorder')->name('storeorder');
        Route::post('/order', 'order')->name('order');
        Route::get('/ordercomplete', 'ordercomplete')->name('ordercomplete');
    });

    //Admin


    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {


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


        //Admin Messages Side//
        Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        Route::prefix('/faq')->name('faq.')->controller(\App\Http\Controllers\AdminPanel\FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });


        //Admin Comments Side//
        Route::prefix('comment')->name('comment.')->controller(\App\Http\Controllers\AdminPanel\CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        Route::prefix('/user')->name('user.')->controller(\App\Http\Controllers\AdminPanel\AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'show')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });


        Route::prefix('/order')->name('order.')->controller(BorrowController::class)->group(function () {
            Route::get('/{slug}', 'index')->name('index');
            Route::get('/edit/{id}', 'show')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/cancelorder/{id}', 'cancelorder')->name('cancelorder');
            Route::get('/cancelproduct/{id}', 'cancelproduct')->name('cancelproduct');
            Route::get('/acceptproduct/{id}', 'acceptproduct')->name('acceptproduct');
        });

    });


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
