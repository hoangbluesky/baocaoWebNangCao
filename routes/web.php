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
