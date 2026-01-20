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

Route::get('/appointment', [BookingController::class, 'index'])->name('appointment');
Route::post('/book-appointment', [BookingController::class, 'bookApppointment'])->name('book-appointment');

// cashFree Payment gateway intregation route
// Route::post('/appointment/payments', [BookingController::class, 'payment'])->name('appointmentPayment');
// Route::any('/appointment/success', [BookingController::class, 'success'])->name('paymentSuccess');

