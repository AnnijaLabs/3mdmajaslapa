<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;

// Norāda maršrutu '/' uz CategoriesController kontroliera index darbību
Route::get('/', [CategoriesController::class, 'index']);

// Norāda maršrutu '/products' uz ProductController kontroliera index darbību un piešķir maršruta nosaukumu 'products'
Route::get('/products', [ProductController::class, 'index'])->name('products');

// Norāda maršrutu '/about' un atgriež 'about' skatu
Route::get('/about', function () {
    return view('about');
});

// Norāda maršrutu '/contact' un atgriež 'contact' skatu
Route::get('/contact', function () {
    return view('contact');
});

// Norāda maršrutu '/product/{id}' uz ProductController kontroliera showDetail darbību un piešķir maršruta nosaukumu 'productdetails'
Route::get('/product/{id}', [ProductController::class, 'showDetail'])->name('productdetails');
