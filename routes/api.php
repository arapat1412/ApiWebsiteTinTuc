<?php

use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhomTinController;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);
Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);



//api nhom tin
Route::get('nhomtin', [NhomTinController::class, 'index']);
Route::post('themnhomtin', [NhomTinController::class, 'store']);
Route::put('suanhomtin/{id}', [NhomTinController::class, 'update']);
Route::delete('xoanhomtin/{id}', [NhomTinController::class, 'destroy']);
