<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class TimKiemNangCaoController extends Controller
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

        // Lọc tin hot
        if ($request->has('tinhot')) {
            $query->where('tinhot', $request->tinhot);
        }

        return response()->json($query->get());
    }
}
