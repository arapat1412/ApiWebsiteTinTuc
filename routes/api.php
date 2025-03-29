<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/tintuc', [TinController::class, 'danhSachTin']);
