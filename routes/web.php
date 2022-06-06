<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.layout.index');
});

// product
Route::get('product', [ProductController::class, 'show'])->name('show-p');
Route::get('product/plus', [ProductController::class, 'create'])->name('create-p');
Route::get('product/plus/{id}', [ProductController::class, 'edit'])->name('edit-p');
Route::put('product/plus/{id}', [ProductController::class, 'update'])->name('update-p');
Route::delete('product/plus/{id}', [ProductController::class, 'destroy'])->name('destroy-p');
Route::post('plus', [ProductController::class, 'store'])->name('store-p');

// contact
Route::get('contact', [ContactController::class, 'show'])->name('show-contact');
Route::get('contact/plus', [ContactController::class, 'create'])->name('create-contact');
Route::get('contact/plus/{id}', [ContactController::class, 'edit'])->name('edit-contact');
Route::post('contact', [ContactController::class, 'store'])->name('store-contact');

// category
Route::get('category', [CategoryController::class, 'show'])->name('show-c');
Route::get('category/plus', [CategoryController::class, 'create'])->name('create-c');
Route::get('category/plus/{id}', [CategoryController::class, 'edit'])->name('edit-c');
Route::put('category/plus/{id}', [CategoryController::class, 'update'])->name('update-c');
Route::delete('category/plus/{id}', [CategoryController::class, 'destroy'])->name('destroy-c');
Route::post('category', [CategoryController::class, 'store'])->name('store-c');

// order
Route::get('order', [OrderController::class, 'show'])->name('show-o');
Route::get('order/plus', [OrderController::class, 'create'])->name('create-o');
Route::post('order', [OrderController::class, 'store'])->name('store-o');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
