<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoryController;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category:name}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/products/{product:name}', [ProductController::class, 'show'])->name('products.show');

// Admin routes
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//     Route::resource('admin/categories', CategoryController::class, ['as' => 'admin']);
//     Route::resource('admin/products', ProductController::class, ['as' => 'admin']);
// });

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/', [AdminController::class, 'index'])->name('admin.index');
//     Route::resource('categories', AdminCategoryController::class, ['as' => 'admin']);
//     Route::resource('products', AdminProductController::class, ['as' => 'admin']);
// });

// Load authentication routes
require __DIR__ . '/auth.php';

// Load admin routes
require __DIR__ . '/admin.php';
