<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AuthController;
use sebastianBergmann\CodeCoverage\Report\Html\Dashboard

Route::get('/', function () {
    return view('portfolio');
    
});
Route::get('register',[AuthController::class,'ShowRegister'])->name 
('register.form');
Route::post('register',[AuthController::class,'register'])->name     
('register');
Route::get('login',[AuthController::class,'Showlogin'])->name ('login.form');
Route::get('login',[AuthController::class,'login'])->name ('login');


Route::get('dashboard',function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard ');
