<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::livewire('/', 'home')->name('home');
// page bunga/product

Route::middleware(['web'])->group(function () {
    Route::livewire('/products', 'product-index')->name('products');
    Route::livewire('/products/{slug}', 'product-liga')->name('products.liga');
    Route::livewire('/products/detail/{slug}', 'product-detail')->name('products.detail');
    Route::livewire('/keranjang', 'keranjang')->name('keranjang');
    // page parcel

    Route::livewire('/myblog', 'blog')->name('blog');
});

// Route::livewire('/checkout', 'checkout')->name('checkout');
// Route::livewire('/history', 'history')->name('history');

Route::middleware('auth')->group(function () {
    Route::livewire('/history', 'history')
        ->name('history');

    Route::livewire('/checkout', 'checkout')
        ->name('checkout');
});


// Admin Dashboard

Route::middleware('role:admin')->group(function () {
    Route::livewire('/dashboard', 'admin.home')
        ->name('dashboard')
        ->layout('layouts.admin.app');

    Route::livewire('/addproduct', 'admin.addproduct')
        ->name('addproduct')
        ->layout('layouts.admin.app');

    Route::livewire('/addcategory', 'admin.category')
        ->name('addcategory')
        ->layout('layouts.admin.app');

    // Blog
    Route::get('/dashboard', function () {
        return view('bloghome');
    })->name('dashboard');

    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
});
