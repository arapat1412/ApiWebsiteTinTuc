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

Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']); //1 Thang
//api trả về ds tin tức theo id nhóm tin hoặc loại tin
Route::get('/tintuc', [TinController::class, 'danhSachTin']); //2 Pat
Route::get('/chitiettin/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']); //3 Dinh


//api nhom tin
Route::get('nhomtin', [NhomTinController::class, 'index']); //4 Pat
Route::post('themnhomtin', [NhomTinController::class, 'store']); //5 Pat
Route::put('suanhomtin/{id}', [NhomTinController::class, 'update']); //6 Pat
Route::delete('xoanhomtin/{id}', [NhomTinController::class, 'destroy']); //7 Pat

//api loai tin
Route::get('/loaitin', [LoaiTinController::class, 'danhSachLoaiTin']); //8 Dinh
Route::post('/themloaitin', [LoaiTinController::class, 'themLoaiTin']); //9 Dinh
Route::put('/sualoaitin/{id}', [LoaiTinController::class, 'suaLoaiTin']); //10 Dinh
Route::delete('/xoaloaitin/{id}', [LoaiTinController::class, 'xoaLoaiTin']); //11 Dinh


//api binhluan
Route::get('/binhluan', [BinhLuanController::class, 'getBinhLuan']); //12 Pat
Route::post('/binhluan', [BinhLuanController::class, 'postBinhLuan']); //13 Pat
Route::put('/binhluan/{id}', [BinhLuanController::class, 'putBinhLuan']); //14 Pat

//login admin 
Route::post('/dangnhap', [LoginAdminController::class, 'login']); //15 Dinh

//bltinthucreturn
Route::get('/tin/{id_tin}/binhluan', [ReturnBLuanTinTucController::class, 'layBinhLuanTheoTin']); //16 Dinh


//api quản lý tin
Route::post('/themtin', [TinController::class, 'store']); //17 Thang
Route::put('/suatin/{id}', [TinController::class, 'update']); //18 Thang
Route::delete('/xoatin/{id}', [TinController::class, 'destroy']); //19 Thang

//tim tin cho admin
Route::get('/danhsachtin', [TinController::class, 'traVeDanhSachTin']); //20 Thang



/// api tim kiem va capnhatslxem
Route::get('/tim-kiem-nang-cao', [TimKiemNangCaoController::class, 'timKiemNangCao']); //21
Route::get('/cap-nhat-xem-tin/{id}', [CapNhatSLXemController::class, 'capNhatLuotXem']); //22