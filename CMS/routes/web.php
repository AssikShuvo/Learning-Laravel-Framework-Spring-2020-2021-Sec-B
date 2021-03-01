<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;


Route::get('/login', [LoginController::class, 'login'])->name("Login.login");
Route::post('/login', [LoginController::class, 'verify'])->name("Login.verify");

Route::get('/registration', [RegistrationController::class, 'registration'])->name("Registration.registration");
Route::post('/registration', [RegistrationController::class, 'store']);




