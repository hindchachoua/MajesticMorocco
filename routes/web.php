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
    Route::post('/addproduct', [ProductController::class,'store'])->name('product.store');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('product.edit');
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/dashboard', [StatistiqueController::class, 'dashboard'])->name('dashboard');

    //categories
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
    Route::get('/addcategorie', [CategorieController::class, 'create'])->name('categorie.add');
    Route::post('/categorieadd', [CategorieController::class, 'store'])->name('categorieadd');
    Route::get('/editCategorie/{id}', [CategorieController::class, 'edit'])->name('categorie.edit');
    Route::put('/updateCategorie/{id}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::delete('/admin/delete/{id}', [CategorieController::class, 'destroy'])->name('categorie.destroy');


    //regions
    Route::get('/region', [RegionController::class, 'index'])->name('region');
    Route::get('/addregion', [RegionController::class, 'create'])->name('addregion');
    Route::post('/regionadd', [RegionController::class, 'store'])->name('regionadd');
    Route::get('/editRegion/{id}', [RegionController::class, 'edit'])->name('region.edit');
    Route::put('/updateRegion/{id}', [RegionController::class, 'update'])->name('region.update');
    Route::delete('/deleteregion/{id}', [RegionController::class, 'destroy'])->name('region.destroy');


    //orders
    Route::get('/cancelOrder', [OrderController::class, 'cancel'])->name('cancel');

    Route::get('/order', [OrderController::class, 'show'])->name('showOrder');
});