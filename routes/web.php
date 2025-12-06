<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Home
Route::get('/', function () {
    return view('dashboard');
});

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Dashboard (protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', function () {
    Auth::logout();                        // Log the user out
    request()->session()->invalidate();    // Clear the session
    request()->session()->regenerateToken(); // Regenerate CSRF token
    return redirect()->route('login.form'); // Redirect to login page
})->name('logout');
