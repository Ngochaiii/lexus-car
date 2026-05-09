<?php

use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\BlogsController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LegalController;
use App\Http\Controllers\web\ProductsController;
use App\Http\Controllers\web\SitemapController;
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

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('web.sitemap');

Route::get('/regis', [HomeController::class, 'regis'])->name('web.home.regis');

Route::get('/lexus-rx', [ProductsController::class, 'index'])->name('products.rx');
Route::get('/lexus-lm', [ProductsController::class, 'lm'])->name('products.lm');
Route::get('/lexus-nx', [ProductsController::class, 'nx'])->name('products.nx');
Route::get('/lexus-lx', [ProductsController::class, 'lx'])->name('products.lx');
Route::get('/lexus-ls', [ProductsController::class, 'ls'])->name('products.ls');
Route::get('/lexus-gx', [ProductsController::class, 'gx'])->name('products.gx');
Route::get('/lexus-es', [ProductsController::class, 'es'])->name('products.es');

Route::get('/technolory-lexus', [TechnogoryLexusController::class, 'index'])->name('tech_car.index');


Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', [BlogsController::class, 'index'])->name('web.blogs');
    Route::get('/{post:slug}', [BlogsController::class, 'detail'])->name('web.blogs.detail');
});

Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('web.about');

Route::get('/chinh-sach-bao-mat', [LegalController::class, 'privacy'])->name('legal.privacy');
Route::get('/dieu-khoan-su-dung', [LegalController::class, 'terms'])->name('legal.terms');
Route::get('/chinh-sach-bao-hanh', [LegalController::class, 'warranty'])->name('legal.warranty');
Route::get('/chinh-sach-doi-tra', [LegalController::class, 'returnPolicy'])->name('legal.return');
Route::get('/chinh-sach-giao-xe', [LegalController::class, 'delivery'])->name('legal.delivery');
