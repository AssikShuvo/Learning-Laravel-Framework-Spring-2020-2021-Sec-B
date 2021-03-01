<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;


Route::get('/login', [LoginController::class, 'login']);

Route::get('/registration', [RegistrationController::class, 'registration']);




