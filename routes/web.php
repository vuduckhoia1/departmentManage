<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/locale/{locale}', [HomeController::class, 'setLocale'])->name('setLocale');
