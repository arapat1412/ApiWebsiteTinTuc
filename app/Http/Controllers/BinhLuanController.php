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

        return response()->json(['message' => 'Bình luận được tạo thành công!', 'data' => $binhLuan], 201);
    }
    //ds bình luận trong khoảng thời gian start_date và end_date là ngày nhập vào
    public function getBinhLuan(Request $request)
{
    // Validate dữ liệu đầu vào
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Lấy danh sách bình luận theo khoảng thời gian
    $binhLuans = ($request->start_date && $request->end_date) ? BinhLuan::whereBetween('thoigian', [$request->start_date, $request->end_date])
        ->orderBy('thoigian', 'desc')
        ->get() : BinhLuan::all();

    return response()->json(['data' => $binhLuans], 200);
}
//hàm sửa trong trái bình luận
public function putBinhLuan(Request $request, $id)
{
    // Validate dữ liệu đầu vào
    $request->validate([
        'trangthai' => 'required|boolean'
    ]);

    // Tìm bình luận theo ID
    $binhLuan = BinhLuan::find($id);

    // Nếu không tìm thấy bình luận
    if (!$binhLuan) {
        return response()->json(['message' => 'Bình luận không tồn tại!'], 404);
    }

    // Cập nhật trạng thái
    $binhLuan->trangthai = $request->trangthai;
    $binhLuan->save();

    return response()->json(['message' => 'Cập nhật trạng thái bình luận thành công!', 'data' => $binhLuan], 200);
}
}
