<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\AuthenticateController;
use App\Http\Controllers\backend\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('category-list', 'backend/category-list');
Route::redirect('brand-list', 'backend/brand-list');
Route::redirect('product-list', 'backend/product-list');
Route::redirect('login', 'backend/login');
Route::redirect('register', 'backend/register');
Route::redirect('dashboard', 'backend/dashboard');
Route::redirect('profile-update-password', 'backend/profile-update-password');


Route::prefix('backend')->name('backend.')->group(function () {

 Route::get('category-list', [CategoryController::class, 'index'])->name('category_list');
 Route::get('category-create', [CategoryController::class, 'create'])->name('category_create');
 Route::post('category-store', [CategoryController::class, 'store'])->name('category_store');
 Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
 Route::post('category-update/{id}', [CategoryController::class, 'update'])->name('category_update');
 Route::get('category-delete/{id}', [CategoryController::class, 'delete'])->name('category_delete');

Route::get('brand-list', [BrandController::class, 'index'])->name('brand_list');
Route::get('brand-create', [BrandController::class, 'create'])->name('brand_create');
Route::post('brand-store', [BrandController::class, 'store'])->name('brand_store');
Route::get('brand-edit/{id}', [BrandController::class, 'edit'])->name('brand_edit');
Route::post('brand-update/{id}', [BrandController::class, 'update'])->name('brand_update');
Route::get('brand-delete/{id}', [BrandController::class, 'delete'])->name('brand_delete');

Route::get('product-list', [ProductController::class, 'index'])->name('product_list');
Route::get('product-create', [ProductController::class, 'create'])->name('product_create');
Route::get('product-edit', [ProductController::class, 'edit'])->name('product_edit');
Route::get('product-delete', [ProductController::class, 'delete'])->name('product_delete');

Route::get('login', [AuthenticateController::class, 'singIn'])->name('login');
Route::post('authenticate', [AuthenticateController::class, 'authenticateCheck'])->name('authenticate');
Route::get('register', [AuthenticateController::class, 'register'])->name('register');
Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');

Route::get('dashboard', [ProductController::class, 'index'])->name('dashboard');

Route::get('profile-edit', [ProfileController::class, 'edit'])->name('profile_edit');
Route::get('change-password', [ProfileController::class, 'changePassword'])->name('profile_change_password');
Route::post('change-password', [ProfileController::class, 'updatePassword'])->name('profile_change_password.submit');

});