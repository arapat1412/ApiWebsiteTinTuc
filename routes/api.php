<?php

use App\Http\Controllers\ReturnDanhSachController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhomTinController;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\ChiTietTinTheoIDController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ReturnBLuanTinTucController;

use App\Http\Controllers\TimKiemNangCaoController;
use App\Http\Controllers\CapNhatSLXemController;

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


//api binhluan
Route::get('/binhluan', [BinhLuanController::class, 'getBinhLuan']);
Route::post('/binhluan', [BinhLuanController::class, 'postBinhLuan']);
Route::put('/binhluan/{id}', [BinhLuanController::class, 'putBinhLuan']);

//login admin 
Route::post('/dangnhap', [LoginAdminController::class, 'login']);

//bltinthucreturn
Route::get('/tin/{id_tin}/binhluan', [ReturnBLuanTinTucController::class, 'layBinhLuanTheoTin']);


//api quản lý tin
Route::post('/themtin', [TinController::class, 'store']);
Route::put('/suatin/{id}', [TinController::class, 'update']);
Route::delete('/xoatin/{id}', [TinController::class, 'destroy']);
Route::get('/danhsachtin', [TinController::class, 'traVeDanhSachTin']);



/// api tim kiem va capnhatslxem

Route::get('/tim-kiem-nang-cao', [TimKiemNangCaoController::class, 'timKiem']);
Route::get('/cap-nhat-xem-tin/{id}', [CapNhatSLXemController::class, 'capNhatLuotXem']);