<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\Tin;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class TinController
{
    public function danhSachTin(Request $request)
    {
        $idNhomTin = $request->input('id_nhomtin');
        $idLoaiTin = $request->input('id_loaitin');

        // Nếu có id_nhomtin, lấy tất cả loại tin thuộc nhóm đó
        if ($idNhomTin) {
            // Lấy tất cả loai_tin thuộc nhom_tin với id_nhomtin
            $loaiTins = LoaiTin::where('id_nhomtin', $idNhomTin)->pluck('id_loaitin');

            // Lọc các tin theo id_loaitin trong danh sách loai_tin
            $tinTuc = Tin::whereIn('id_loaitin', $loaiTins)->get();
        }
        // Nếu có id_loaitin, lọc tin tức theo loại tin
        elseif ($idLoaiTin) {
            $tinTuc = Tin::where('id_loaitin', $idLoaiTin)->get();
        }
        // Nếu không có tham số nào, lấy tất cả tin tức
        else {
            $tinTuc = Tin::all();
        }

        return response()->json($tinTuc);
    }
}
