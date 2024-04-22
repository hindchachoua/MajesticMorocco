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


Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/operator', [ProductController::class, 'index'])->name('operator');
    Route::get('/addproduct', [ProductController::class,'create'])->name('addproduct');
    Route::post('/addproduct', [ProductController::class,'store'])->name('product.store');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/updateProduct/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/operator/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/showproduct/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/ordersClient', [OrderController::class, 'displayOrdersClient'])->name('ordersClient');

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
    Route::post('/cancelOrder/{id}', [OrderController::class, 'cancelOrder'])->name('cancelOrder');

    // Route::post('/cancelOrder/{id}', [OrderController::class, 'cancelAdmin'])->name('cancelOrderAdmin');
    Route::get('/order/{id}', [OrderController::class, 'show'])->name('showOrder');

    //access
    Route::get('/accessuser', [AuthManager::class, 'indexAccessUser'])->name('access.user');
    Route::get('/accessoperator', [AuthManager::class, 'indexAccessOperator'])->name('access.operator');
    Route::patch('/blockUser/{userId}', [AuthManager::class, 'blockUser'])->name('blockUser');

    //validation
    Route::get('/validation', [ProductController::class, 'products'])->name('products.validation');
    Route::put('/validation/{id}', [ProductController::class, 'validation'])->name('validation');

    //visualiser l'historique
    Route::get('/historyAdmin', [OrderController::class, 'displayAllOrders'])->name('historyAdmin');
    //cancel order
    // Route::post('/cancelOrderAdmin/{id}', [OrderController::class, 'cancelAdmin'])->name('cancelOrder');

});


Route::middleware('auth', 'role:3')->group(function () {
    Route::get('/products', [ProductController::class, 'displayProduct'])->name('products');

    Route::get('/showproduct/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/user/reserve/{product}', [OrderController::class, 'reserve'])->name('user.reserve');

    //history
    Route::get('/history', [OrderController::class, 'displayHistoryClient'])->name('history');

    //cancel order
    Route::post('/cancelOrder/{id}', [OrderController::class, 'cancelOrder'])->name('cancelOrder');
});