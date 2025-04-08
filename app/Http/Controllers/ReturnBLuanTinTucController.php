<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use Illuminate\Http\Request;

class ReturnBLuanTinTucController
{
    /**
     * Trả về danh sách bình luận đã được duyệt của một tin tức,
     * sắp xếp giảm dần theo thời gian.
     */
    public function layBinhLuanTheoTin($id_tin)
    {
        $binhLuans = BinhLuan::where('id_tin', $id_tin)
            ->where('trangthai', true)
            ->orderByDesc('thoigian')
            ->get();

        return response()->json($binhLuans);
    }
}
