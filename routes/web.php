<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category-list', [CategoryController::class, 'index'])->name('category_list');
Route::get('category-edit', [CategoryController::class, 'edit'])->name('category_edit');
Route::get('category-create', [CategoryController::class, 'create'])->name('category_create');
Route::get('category-delete', [CategoryController::class, 'delete'])->name('category_delete');