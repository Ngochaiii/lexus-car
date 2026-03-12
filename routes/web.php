<?php

use App\Http\Controllers\web\BlogsController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\ProductsController;
use App\Http\Controllers\web\TechnogoryLexusController;
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

Route::get('/', [HomeController::class, 'index'])->name('web.home');

Route::get('/lexus-rx', [ProductsController::class, 'index'])->name('products.index');

Route::get('/technolory-lexus', [TechnogoryLexusController::class, 'index'])->name('tech_car.index');


 Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', [BlogsController::class, 'index'])->name('web.blogs');
        Route::get('/detail', [BlogsController::class, 'detail'])->name('web.blogs.detail');
    });
