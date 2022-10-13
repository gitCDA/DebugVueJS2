<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\StripeCheckoutController;
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

Route::get('/', function () {
    return view('welcome');
});

// Pour aller dans la partie paiement Stripe
Route::get('/checkout', [StripeCheckoutController::class, 'create']);
Route::post('/paymentIntent', [StripeCheckoutController::class, 'paymentIntent']);

// Pour aller dans le panier
Route::get('ShoppingCart', ShoppingCartController::class)
    ->name('cart.index');

// Pour afficher la page des produits
Route::get('products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';