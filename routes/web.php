<?php

use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

// Authentication Routes (including registration, login, etc.)
require __DIR__ . '/auth.php';

// Public Routes (No authentication required)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/estate-card', function () {
    return view('estate-card-info');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties-search', function () {
    return view('properties-search');
});

// Protected Routes (Authenticated Users Only)
Route::middleware(['auth'])->group(function () {

    // Dashboard and Profile Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Password change route
    Route::get('/password/reset', [PasswordController::class, 'showResetForm'])->name('password.request');
    Route::post('/password/email', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Property Routes
    Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');

    Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
    Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
});

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/support', function () {
    return view('support');
})->name('support');

// Handle the form submission
Route::post('/support/send', [SupportController::class, 'send'])->name('support.send');
