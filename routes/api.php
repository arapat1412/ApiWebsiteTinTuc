<?php

use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhomTinController;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\ChiTietTinTheoIDController;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);
//api trả về ds tin tức theo id nhóm tin hoặc loại tin
Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/chitiettin/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);



//api nhom tin
Route::get('nhomtin', [NhomTinController::class, 'index']);
Route::post('themnhomtin', [NhomTinController::class, 'store']);
Route::put('suanhomtin/{id}', [NhomTinController::class, 'update']);
Route::delete('xoanhomtin/{id}', [NhomTinController::class, 'destroy']);

//api loai tin
Route::get('/loaitin', [LoaiTinController::class, 'danhSachLoaiTin']);
Route::post('/themloaitin', [LoaiTinController::class, 'themLoaiTin']);
Route::put('/sualoaitin/{id}', [LoaiTinController::class, 'suaLoaiTin']);
Route::delete('/xoaloaitin/{id}', [LoaiTinController::class, 'xoaLoaiTin']);
