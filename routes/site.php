<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\BookingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

Route::post('/book-appointment', [BookingController::class, 'store'])->name('appointment');

