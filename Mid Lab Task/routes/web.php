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

Route::get('/system/product_management', [ProductController::class, 'buttons']);

Route::group(['prefix' => 'system/product_management'], function(){

    Route::get('/existing_products', [ProductController::class, 'product_list']);
        
    
        
    Route::get('/add_product', [ProductController::class, 'add_product']);

    Route::post('/add_product', [ProductController::class, 'store_product']);

    Route::get('/existing_products/edit/{id}', [ProductController::class, 'product_edit'])->name("Product.edit");

    Route::post('/existing_products/edit/{id}', [ProductController::class, 'product_update']);

    Route::get('/existing_products/delete/{id}', [ProductController::class, 'product_delete']);

    Route::post('/existing_products/delete/{id}', [ProductController::class, 'product_destroy']);

    Route::get('/product/{product_id}/vendor_details/{vendor_id}', [ProductController::class, 'details']);

    ////////////////////////////// Upcoming Products //////////////////////////////

    Route::get('/upcoming_products', [ProductController::class, 'upcoming_products']);

    Route::get('/upcoming_products/edit/{id}', [ProductController::class, 'upcoming_product_edit'])->name("Upcoming_Products.edit");
    
    Route::post('/upcoming_products/edit/{id}', [ProductController::class, 'upcoming_product_update'])->name("Upcoming_Products.edit");
});





