<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trains', [TrainController::class, 'index'])->name('trains.index');
Route::get('/trains/{id}', [TrainController::class, 'show'])->name('trains.show');
Route::post('/trains/search', [TrainController::class, 'search'])->name('trains.search');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/bookings/create/{schedule_id}', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('/bookings', [BookingController::class, 'history'])->name('bookings.history');
    Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::get('/trains', [AdminController::class, 'trains'])->name('admin.trains');
    Route::get('/trains/create', [AdminController::class, 'createTrain'])->name('admin.trains.create');
    Route::post('/trains', [AdminController::class, 'storeTrain'])->name('admin.trains.store');
    Route::get('/trains/{id}/edit', [AdminController::class, 'editTrain'])->name('admin.trains.edit');
    Route::put('/trains/{id}', [AdminController::class, 'updateTrain'])->name('admin.trains.update');
    
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
});