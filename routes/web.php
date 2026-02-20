<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AppointmentController;


Route::view('/login','admin.login')->name('login');
Route::post('management/login', [ManagementController::class, 'login'])->name('adminLogin');
Route::get('admin/logout', [ManagementController::class, 'logout'])->name('logout')->middleware('auth:admin');

// Dashboard
Route::get('/admin/dashboard', [ManagementController::class, 'index'])->name('dashboard')->middleware('auth:admin');

// Services
Route::get('/admin/services', [ServiceController::class, 'services'])->name('services')->middleware('auth:admin');
Route::view('admin/add-service','admin.form')->name('service.add')->middleware('auth:admin');
Route::post('addservice', [ServiceController::class, 'addService'])->name('addService')->middleware('auth:admin');

Route::post('/admin/service-update', [ServiceController::class, 'updateServiceStatus'])->name('service.update')->middleware('auth:admin');
Route::post('/admin/service-delete', [ServiceController::class, 'deleteService'])->name('service.delete')->middleware('auth:admin');


// Reports
Route::get('/admin/users', [ManagementController::class, 'users'])->name('users')->middleware('auth:admin');
Route::get('/admin/appointments', [AppointmentController::class, 'appointments'])->name('appointments')->middleware('auth:admin');
// Route::get('/management', [ManagementController::class, 'showServices']);

