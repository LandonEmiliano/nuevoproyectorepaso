<?php

use App\Http\Controllers\ProductCcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductCcontroller::class, 'index']);
Route::get('/products/create', [ProductCcontroller::class, 'create'])->name('products.create');
Route::post('/products', [ProductCcontroller::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductCcontroller::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductCcontroller::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductCcontroller::class, 'destroy'])->name('products.destroy');
Route::get('/login', [ProductCcontroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [ProductCcontroller::class, 'login'])->name('login.store');