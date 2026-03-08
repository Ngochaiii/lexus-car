<?php

use App\Http\Controllers\admin\DasboardController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DasboardController::class, 'index'])->name('admin.dashboard');
