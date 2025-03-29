<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/tintuc', [TinController::class, 'danhSachTin']);
Route::get('/tin-tuc/{id}', [ChiTietTinTheoIDController::class, 'layChiTietTin']);