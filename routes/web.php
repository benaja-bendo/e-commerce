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


/* Cart Route */
Route::post('/panier/ajouter',['App\Http\Controllers\CartController','store'])->name('cart.store');
Route::get('/panier',['App\Http\Controllers\CartController','index'])->name('cart.index');
Route::delete('/panier/{id}',['App\Http\Controllers\CartController','destroy'])->name('cart.destroy');

Route::get('/videpanier',function (){
    \Gloudemans\Shoppingcart\Facades\Cart::destroy();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
