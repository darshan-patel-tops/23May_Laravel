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

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
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

Route::get('seller/dashbaord',[SellerHomeController::class,'index']);

Route::get('seller/all-products',[ProductController::class,'index']);
Route::get('seller/add-products',[ProductController::class,'add']);
