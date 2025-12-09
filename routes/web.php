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

// -----------------------------
// PUBLIC PAGES (should NOT require auth)
// -----------------------------

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('project');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Logout (protected)
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login.form');
})->middleware('auth')->name('logout');
