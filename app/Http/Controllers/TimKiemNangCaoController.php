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
        if ($request->has('titleOrContent')) {
            $keyword = $request->titleOrContent;
            $query->where(function ($q) use ($keyword) {
                $q->where('tieude', 'LIKE', "%$keyword%")
                    ->orWhere('mota', 'LIKE', "%$keyword%")
                    ->orWhere('noidung', 'LIKE', "%$keyword%");
            });
        }

        // Lọc theo id_nhomtin (thông qua quan hệ loaiTin -> nhomTin)
        if ($request->has('newsGroup')) {
            $query->whereHas('nhomTin', function ($q) use ($request) {
                $q->where('id_nhomtin', $request->newsGroup);
            });
        }

        // Lọc theo id_loaitin
        if ($request->has('newsType')) {
            $query->where('id_loaitin', $request->newsType);
        }

        // Lọc theo khoảng thời gian nếu có cả ngaybd và ngaykt
        if ($request->has(['startDate', 'endDate'])) {
            $startDate = $request->startDate . ' 00:00:00';  // Thiết lập giờ bắt đầu là 00:00:00
            $endDate = $request->endDate . ' 23:59:59';  // Thiết lập giờ kết thúc là 23:59:59

            $query->whereBetween('ngaydangtin', [$startDate, $endDate]);
        }

        // Lấy danh sách cuối cùng
        $listTin = $query->orderBy('ngaydangtin', 'desc')
            ->orderBy('tinhot', 'desc')
            ->get();

        return response()->json($listTin, 200);
    }
}
