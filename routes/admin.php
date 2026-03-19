<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DasboardController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DasboardController::class, 'index'])->name('admin.dashboard');

 Route::group(['prefix' => 'customers'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('admin.customer');
    });
