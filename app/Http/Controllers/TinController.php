<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;

class TinController 
{
    public function danhSachTin(Request $request)
    {
        $idNhomTin = $request->query('id_nhomtin');
        $idLoaiTin = $request->query('id_loaitin');

        $query = Tin::query();

        // Lọc theo loại tin
        if ($idLoaiTin) {
            $query->where('id_loaitin', $idLoaiTin);
        }

        // Lọc theo nhóm tin (thông qua loại tin)
        if ($idNhomTin) {
            $query->whereHas('loaiTin', function($q) use ($idNhomTin) {
                $q->where('id_nhomtin', $idNhomTin);
            });
        }

        // Lấy danh sách tin
        $tinTuc = $query->get();

        return response()->json($tinTuc);
    }
}
