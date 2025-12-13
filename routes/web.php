<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\AuthenticateController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Middleware\BackendMiddleware;

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

 Route::get('category-list', [CategoryController::class, 'index'])->name('category_list')->middleware(BackendMiddleware::class);
 Route::get('category-create', [CategoryController::class, 'create'])->name('category_create')->middleware(BackendMiddleware::class);
 Route::post('category-store', [CategoryController::class, 'store'])->name('category_store')->middleware(BackendMiddleware::class);
 Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category_edit')->middleware(BackendMiddleware::class);
 Route::post('category-update/{id}', [CategoryController::class, 'update'])->name('category_update')->middleware(BackendMiddleware::class);
 Route::get('category-delete/{id}', [CategoryController::class, 'delete'])->name('category_delete')->middleware(BackendMiddleware::class);

Route::get('brand-list', [BrandController::class, 'index'])->name('brand_list')->middleware(BackendMiddleware::class) ;
Route::get('brand-create', [BrandController::class, 'create'])->name('brand_create')->middleware(BackendMiddleware::class);
Route::post('brand-store', [BrandController::class, 'store'])->name('brand_store')->middleware(BackendMiddleware::class);
Route::get('brand-edit/{id}', [BrandController::class, 'edit'])->name('brand_edit')->middleware(BackendMiddleware::class);
Route::post('brand-update/{id}', [BrandController::class, 'update'])->name('brand_update')->middleware(BackendMiddleware::class);
Route::get('brand-delete/{id}', [BrandController::class, 'delete'])->name('brand_delete')->middleware(BackendMiddleware::class);

Route::get('product-list', [ProductController::class, 'index'])->name('product_list')->middleware(BackendMiddleware::class);
Route::get('product-create', [ProductController::class, 'create'])->name('product_create')->middleware(BackendMiddleware::class);
Route::post('product-store', [ProductController::class, 'store'])->name('product_store')->middleware(BackendMiddleware::class);
Route::get('product-edit/{id}', [ProductController::class, 'edit'])->name('product_edit')->middleware(BackendMiddleware::class);
Route::post('product-update/{id}', [ProductController::class, 'update'])->name('product_update')->middleware(BackendMiddleware::class);
Route::get('product-delete/{id}', [ProductController::class, 'delete'])->name('product_delete')->middleware(BackendMiddleware::class);

Route::get('login', [AuthenticateController::class, 'singIn'])->name('login');
Route::post('authenticate', [AuthenticateController::class, 'authenticateCheck'])->name('authenticate');
Route::get('register', [AuthenticateController::class, 'register'])->name('register');
Route::post('register', [AuthenticateController::class, 'storeUser'])->name('register_store_user');
Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');

Route::get('dashboard', [ProductController::class, 'index'])->name('dashboard')->middleware(BackendMiddleware::class);

Route::get('profile-edit', [ProfileController::class, 'edit'])->name('profile_edit')->middleware(BackendMiddleware::class);
Route::get('change-password', [ProfileController::class, 'changePassword'])->name('profile_change_password')->middleware(BackendMiddleware::class);
Route::post('change-password', [ProfileController::class, 'updatePassword'])->name('profile_change_password.submit')->middleware(BackendMiddleware::class);

});