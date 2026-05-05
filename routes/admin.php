<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DasboardController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DasboardController::class, 'index'])->name('admin.dashboard');

 Route::group(['prefix' => 'customers'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('admin.customer');
    });

Route::group(['prefix' => 'posts', 'as' => 'admin.posts.'], function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::post('/analyze-seo', [PostController::class, 'analyzeSeo'])->name('analyze-seo');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    Route::post('/{post}/publish', [PostController::class, 'publish'])->name('publish');
    Route::post('/{post}/unpublish', [PostController::class, 'unpublish'])->name('unpublish');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');
});

Route::post('/media/upload', [MediaController::class, 'upload'])->name('admin.media.upload');
