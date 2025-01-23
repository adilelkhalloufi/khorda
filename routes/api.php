<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FavarisController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UniteController;
use Illuminate\Support\Facades\Route;

//  Public routes
Route::get('categorie', [CategorieController::class, 'index']);
Route::get('unites', [UniteController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('forget-password', [AuthController::class, 'forgetPassword']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::post('logout', [AuthController::class, 'logout']);
    
    //api to create products
    Route::resources('product',ProductController::class);
    
    Route::post('addToFavaris', FavarisController::class);
    Route::resources('order', OrderController::class);
    Route::resources('bid', BidController::class);




});
