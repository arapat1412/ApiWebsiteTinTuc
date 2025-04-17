<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;

class BinhLuanController
{
    public function postBinhLuan(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'email' => 'required|email|max:30',
            'noidung' => 'required|string|max:1000',
            'id_tin' => 'required|integer|exists:tin,id_tin',
        ]);

        // Tạo mới bình luận
        $binhLuan = BinhLuan::create([
            'email' => $validated['email'],
            'thoigian' => now(),
            'noidung' => $validated['noidung'],
            'trangthai' => false, // Chưa duyệt
            'id_tin' => $validated['id_tin'],
        ]);

        return response()->json(['message' => 'Bình luận đã được gửi và đang chờ quản trị viên duyệt!'], 201);
    }
    //ds bình luận trong khoảng thời gian start_date và end_date là ngày nhập vào
    public function getBinhLuan(Request $request)
    {
        // Chỉ validate nếu có dữ liệu
        $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $query = BinhLuan::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start = $request->start_date . ' 00:00:00';
            $end = $request->end_date . ' 23:59:59';
            $query->whereBetween('thoigian', [$start, $end]);
        }

        $binhLuans = $query->orderBy('thoigian', 'desc')->get();

        return response()->json(['data' => $binhLuans], 200);
    }

    //hàm sửa trong trái bình luận
    public function putBinhLuan($id)
    {
        // Tìm bình luận theo ID
        $binhLuan = BinhLuan::find($id);

        // Nếu không tìm thấy bình luận
        if (!$binhLuan) {
            return response()->json(['message' => 'Bình luận không tồn tại!'], 404);
        }

        // Cập nhật trạng thái
        $binhLuan->trangthai = $binhLuan->trangthai ? false : true;
        $binhLuan->save();

        return response()->json(['message' => $binhLuan->trangthai ? 'bình luận đã được duyệt' : 'bỏ duyệt bình luận thành công'], 200);
    }
}
