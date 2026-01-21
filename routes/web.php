<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManagementController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

// Route::post('/book-appointment', [BookingController::class, 'store'])->name('booking.store');



// Route::get('/contact', function () {
//     return view('contact.contact',['name'=>'nitish goel']);
// });

// Route::get('users/{type}',[Management::class,'users']);
// Route::get('all-users',[Management::class,'users']);
// Route::get('header',[Authentor::class,'dashboard'])->name('header');

// // View
// // Route::view('sign-up','register')->name('sign-up');
// Route::view('sign-in','login')->name('sign-in');
// Route::view('sign-up','register');

// // API
// Route::post('register',[Authentor::class,'signup'])->name('register');
// Route::post('login',[Authentor::class,'signin'])->name('login');

Route::view('/login','admin.login');
Route::post('management/login', [ManagementController::class, 'login'])->name('adminLogin');
Route::get('/management', [ManagementController::class, 'showServices']);
Route::get('/admin/dashboard', [ManagementController::class, 'index'])->name('dashboard');
