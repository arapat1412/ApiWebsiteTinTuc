<?php

use App\Http\Controllers\ReturnDanhSachController;
use Illuminate\Support\Facades\Route;


Route::get('/trangchu', [ReturnDanhSachController::class, 'getDuLieuChoTrangChu']);



