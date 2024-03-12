<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        //Danh sach
        Route::get('index', 'index')->name('index');
        //Them
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        //Sua
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        //Xoa
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
        //Danh sach
        Route::get('index', 'index')->name('index');
        //Them
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        //Sua
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        //Xoa
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        //Danh sach
        Route::get('index', 'index')->name('index');
        //Them
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        //Sua
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        //Xoa
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});