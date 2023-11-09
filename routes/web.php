<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class,'redirect'])->name('home');
// Route::get('/login', [HomeController::class,'index'])->name('home');
Route::get('/view_catagory', [AdminController::class,'view_catagory'])->name('home');
Route::post('/add_catagory', [AdminController::class,'add_catagory'])->name('home');
Route::get('/delete_catagory/{id}', [AdminController::class,'delete_catagory'])->name('home');
Route::get('/view_product', [AdminController::class,'view_product'])->name('home');
Route::post('/add_product', [AdminController::class,'add_product'])->name('home');
Route::get('/show_product', [AdminController::class,'show_product'])->name('home');
Route::get('/delete_product/{id}', [AdminController::class,'delete_product'])->name('home');
Route::get('/update_product/{id}', [AdminController::class,'update_product'])->name('home');
Route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm'])->name('home');
Route::get('/product_details/{id}', [HomeController::class,'product_details'])->name('home');
Route::post('/add_cart/{id}', [HomeController::class,'add_cart'])->name('home');

Route::get('/show_cart', [HomeController::class,'show_cart'])->name('home');
Route::get('/remove_cart/{id}', [HomeController::class,'remove_cart'])->name('home');
Route::get('/cash_order', [HomeController::class,'cash_order'])->name('home');
Route::get('/stripe/{totalprice}', [HomeController::class,'stripe'])->name('home');
Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/order', [AdminController::class,'order'])->name('home');
Route::get('/delivered/{id}', [AdminController::class,'delivered'])->name('home');
