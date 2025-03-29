<?php

<<<<<<< HEAD
use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);
Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);



=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);
>>>>>>> ae9a47947d7891b786f4491533233c4136b68c23
