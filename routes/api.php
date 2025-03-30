<?php

use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhomTinController;
use App\Http\Controllers\LoaiTinController;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);
Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);



//api nhom tin
Route::get('nhomtin', [NhomTinController::class, 'index']);
Route::post('themnhomtin', [NhomTinController::class, 'store']);
Route::put('suanhomtin/{id}', [NhomTinController::class, 'update']);
Route::delete('xoanhomtin/{id}', [NhomTinController::class, 'destroy']);

//api loai tin
Route::get('/loai-tin', [LoaiTinController::class, 'danhSachLoaiTin']);
Route::post('/loai-tin', [LoaiTinController::class, 'themLoaiTin']);
Route::put('/loai-tin/{id}', [LoaiTinController::class, 'suaLoaiTin']);
Route::delete('/loai-tin/{id}', [LoaiTinController::class, 'xoaLoaiTin']);
