<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\NhomTin;
use App\Models\Tin;

class ReturnDanhSachController
{
    public function getDuLieuChoTrangChu()
    {
        $nhomTin = NhomTin::where('trangthai', 1)->select('id_nhomtin', 'ten_nhomtin')->get();
            $loaitin = LoaiTin::where('trangthai', 1)->select('id_loaitin', 'ten_loaitin', 'id_nhomtin')->get();
        $tin = Tin::where('trangthai', 1)
            ->orderBy('ngaydangtin', 'desc')
            ->select([
                'id_tin',
                'tieude',
                'hinhdaidien',
                'mota',
                'noidung',
                'ngaydangtin',
                'tacgia',
                'solanxem',
                'tinhot',
                'id_loaitin'
            ])
            ->get();
        return response()->json(['nhomtin' => $nhomTin, 'loaitin' => $loaitin, 'tin' => $tin]);
    }
}
