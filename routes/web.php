<?php

use App\Http\Controllers\JustOrangeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
Route::get('/', [JustOrangeController::class , 'index']);
Route::get('/products', [JustOrangeController::class , 'showproducts'])->name('products.index');
Route::get('/products/{slug}', [JustOrangeController::class , 'product'])->name('products.detail');


