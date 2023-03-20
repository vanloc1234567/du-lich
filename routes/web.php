<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToursController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('/login', [CustomerController::class, 'viewLogin']);

Route::get('/register', [CustomerController::class, 'viewRegister']);

Route::get('/ve-tham-quan',[HomeController::class,'veThamQuan']);
Route::get('/bai-viet',[HomeController::class,'baiViet']);
Route::get('/lien-he',[HomeController::class,'lienHe']);

Route::get('/tours',[ToursController::class,'viewTours']);
Route::get('/thanh-toan',[ToursController::class,'viewThanhToan']);
Route::get('/dat-ve',[ToursController::class,'viewDatVe']);
