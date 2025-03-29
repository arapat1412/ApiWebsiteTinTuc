<?php

use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);
Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);
