<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/about' , function () {
    return view('about');
})->name('about');
Route::get('/products' , function () {
    return view('product');
})->name('products');

Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/operator', [ProductController::class, 'index'])->name('operator');
    Route::get('/addproduct', [ProductController::class,'create'])->name('addproduct');
    Route::get('/editProduct', [ProductController::class, 'edit'])->name('editproduct');
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/dashboard', [StatistiqueController::class, 'dashboard'])->name('dashboard');
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
    Route::get('/addcategorie', [CategorieController::class, 'create'])->name('addcategorie');
    Route::get('/region', [RegionController::class, 'index'])->name('region');
    Route::get('/addregion', [RegionController::class, 'create'])->name('addregion');

    Route::get('/cancelOrder', [OrderController::class, 'cancel'])->name('cancel');

    Route::get('/order', [OrderController::class, 'show'])->name('showOrder');
});