<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TariffController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\BaseController;


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

Route::get('/продукты', [ProductController::class, 'index'])->name('product.index');
Route::get('/тарифы', [TariffController::class, 'index'])->name('tariff.index');
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/блог', [BlogController::class, 'index'])->name('blog.index');
Route::get('/поддержка', [SupportController::class, 'index'])->name('support.index');
Route::get('/база_знаний', [BaseController::class, 'index'])->name('base.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
