<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard'); // Make sure dashboard.blade.php exists
})->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // or wherever you want to redirect after logout
})->name('logout');


Route::get('/profile/edit', function () {
    return 'Profile Edit Page (not implemented)';
})->name('profile.edit');

// Train Related
Route::get('/trains', [TrainController::class, 'index'])->name('trains.index');
Route::get('/trains/search', [TrainController::class, 'search'])->name('trains.search');

// Booking Related
Route::get('/booking/{train}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/{train}', [BookingController::class, 'store'])->name('booking.store');
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/booking/cancel/{booking}', [BookingController::class, 'cancel'])->name('booking.cancel');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
