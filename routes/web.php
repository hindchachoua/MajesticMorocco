<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductController;
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

Route::get('/operator', [ProductController::class, 'index'])->name('operator');
// Route::middleware(['auth', 'role:2'])->group(function () {
    
// });