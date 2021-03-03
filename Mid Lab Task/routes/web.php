<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SMPController;
use App\Http\Controllers\ProductController;


Route::get('/login', [LoginController::class, 'login'])->name("Login.login");
Route::post('/login', [LoginController::class, 'verify'])->name("Login.verify");

Route::get('/registration', [RegistrationController::class, 'registration'])->name("Registration.registration");
Route::post('/registration', [RegistrationController::class, 'store']);

Route::group(['prefix' => 'system/sales'], function(){

    Route::get('/physical_store', [SMPController::class, 'physical_store']);
        
    Route::get('/social_media', [SMPController::class, 'social_media']);
        
    Route::get('/ecommerce', [SMPController::class, 'ecommerce']);
        
});

Route::group(['prefix' => 'system/product_management'], function(){

    Route::get('/existing_products', [ProductController::class, 'existing_products']);
        
    Route::get('/upcoming_products', [ProductController::class, 'upcoming_products']);
        
    Route::get('/add_product', [ProductController::class, 'add_product']);
        
});