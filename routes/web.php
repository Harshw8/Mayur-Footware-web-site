<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\AuthenticateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category-list', fn() => redirect('/backend/category-list'));
Route::get('brand-list', fn() => redirect('/backend/brand-list'));
Route::get('product-list', fn() => redirect('/backend/product-list'));
Route::get('login', fn() => redirect('/backend/login'));
Route::get('register', fn() => redirect('/backend/register'));

Route::prefix('backend')->name('backend.')->group(function () {

Route::get('category-list', [CategoryController::class, 'index'])->name('category_list');
Route::get('category-edit', [CategoryController::class, 'edit'])->name('category_edit');
Route::get('category-create', [CategoryController::class, 'create'])->name('category_create');
Route::get('category-delete', [CategoryController::class, 'delete'])->name('category_delete');

Route::get('brand-list', [BrandController::class, 'index'])->name('brand_list');
Route::get('brand-create', [BrandController::class, 'create'])->name('brand_create');
Route::get('brand-edit', [BrandController::class, 'edit'])->name('brand_edit');
Route::get('brand-delete', [BrandController::class, 'delete'])->name('brand_delete');

Route::get('product-list', [ProductController::class, 'index'])->name('product_list');
Route::get('product-create', [ProductController::class, 'create'])->name('product_create');
Route::get('product-edit', [ProductController::class, 'edit'])->name('product_edit');
Route::get('product-delete', [ProductController::class, 'delete'])->name('product_delete');

Route::get('login', [AuthenticateController::class, 'singIn'])->name('login');
Route::post('authenticate', [AuthenticateController::class, 'authenticateCheck'])->name('authenticate');
Route::get('register', [AuthenticateController::class, 'register'])->name('register');

});