<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminTechnologyController;
use App\Http\Controllers\AdminRecipeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group and "auth" middleware group.
| Now create something great!
|
*/


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('categories', AdminCategoryController::class, ['as' => 'admin']);
    Route::resource('products', AdminProductController::class, ['as' => 'admin']);
    Route::resource('technologies', AdminTechnologyController::class, ['as' => 'admin']);
    Route::resource('recipes', AdminRecipeController::class, ['as' => 'admin']);
});
