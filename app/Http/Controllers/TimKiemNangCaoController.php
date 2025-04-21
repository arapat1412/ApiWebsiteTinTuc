<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class TimKiemNangCaoController
{
    public function timKiem(Request $request)
    {
        $query = Tin::with(['loaiTin', 'nhomTin']);

        // Tìm kiếm fulltext
        if ($request->has('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('tieude', 'LIKE', "%$keyword%")
                    ->orWhere('mota', 'LIKE', "%$keyword%")
                    ->orWhere('noidung', 'LIKE', "%$keyword%");
            });
        }

        // Lọc theo id_loaitin
        if ($request->has('loaitin')) {
            $query->where('id_loaitin', $request->loaitin);
        }

        // Lọc theo id_nhomtin (thông qua quan hệ loaiTin -> nhomTin)
        if ($request->has('nhomtin')) {
            $query->whereHas('nhomTin', function ($q) use ($request) {
                $q->where('id_nhomtin', $request->nhomtin);
            });
        }

        // Lọc theo khoảng thời gian nếu có cả ngaybd và ngaykt
        if ($request->has(['ngaybd', 'ngaykt'])) {
            $query->whereBetween('ngaydangtin', [$request->ngaybd, $request->ngaykt]);
        }

        // Lấy danh sách cuối cùng
        $listTin = $query->orderBy('ngaydangtin', 'desc')
            ->orderBy('tinhot', 'desc')
            ->get();

        return response()->json($listTin, 200);
    }
}
