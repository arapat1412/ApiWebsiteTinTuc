<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class TinController
{
    public function danhSachTin()
    {
        // Lấy danh sách tin
        $tinTuc = TinTuc::all();

        return response()->json($tinTuc);
    }
}
