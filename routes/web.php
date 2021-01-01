<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',['App\Http\Controllers\ProductController','index'])->name('product.index');
Route::get('/boutique/{slug}',['App\Http\Controllers\ProductController','show'])->name('product.show');

Route::post('/panier/ajouter',['App\Http\Controllers\CartController','store'])->name('cart.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
