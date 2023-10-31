<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seller\HomeController as SellerHomeController;
use App\Http\Controllers\Seller\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'login_auth']);
Route::get('/register',[AuthController::class,'register'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/forget-password',[AuthController::class,'forget_password']);
Route::post('/forget-password',[AuthController::class,'mail_link']);

Route::get('/reset-password/{token}',[AuthController::class,'reset_password']);
Route::post('/reset-password/{token}',[AuthController::class,'reset']);
// Route::get('allusers',[APIController::class,'allusers']);


Route::get('authorized/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('seller/dashboard',[SellerHomeController::class,'index'])->middleware(['SellerMiddleware','auth']);

Route::get('seller/all-products',[ProductController::class,'index'])->middleware('SellerMiddleware');
Route::get('seller/add-products',[ProductController::class,'add'])->middleware('SellerMiddleware');
Route::post('seller/add-products',[ProductController::class,'store'])->middleware('SellerMiddleware');

Route::get('seller/update-product/{id}',[ProductController::class,'update'])->middleware('SellerMiddleware');
// Route::post('seller/update-product/{id}',[ProductController::class,'update_change']);
// Route::patch('seller/update-product/{id}',[ProductController::class,'update_change']);
Route::put('seller/update-product/{id}',[ProductController::class,'update_change'])->middleware('SellerMiddleware');

// Route::get('seller/delete-product/{id}',[ProductController::class,'delete']);
Route::delete('seller/delete-product/{id}',[ProductController::class,'delete'])->middleware('SellerMiddleware');


Route::prefix('seller')->middleware(['SellerMiddleware','auth'])->group(function () {
    // Route::get('/users', function () {
    // });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/orders/{id}', 'show');
        Route::post('/orders', 'store');
    });
});
