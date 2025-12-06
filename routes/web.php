<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category-list', [CategoryController::class, 'index'])->name('category_list');
Route::get('category-edit', [CategoryController::class, 'edit'])->name('category_edit');
Route::get('category-create', [CategoryController::class, 'create'])->name('category_create');
Route::get('category-delete', [CategoryController::class, 'delete'])->name('category_delete');

Route::get('brand-list', [BrandController::class, 'index'])->name('brand_list');
Route::get('brand-create', [BrandController::class, 'create'])->name('brand_create');
Route::get('brand-edit', [BrandController::class, 'edit'])->name('brand_edit');
Route::get('brand-delete', [BrandController::class, 'delete'])->name('brand_delete');