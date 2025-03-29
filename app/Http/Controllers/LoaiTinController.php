<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\Tin;
use Illuminate\Http\Request;

class LoaiTinController extends Controller
{
    // API lấy danh sách loại tin
    public function danhSachLoaiTin()
    {
        $loaiTin = LoaiTin::all();
        return response()->json($loaiTin);
    }

    // API thêm loại tin
    public function themLoaiTin(Request $request)
    {
        $request->validate([
            'ten_loaitin' => 'required|string|max:30',
            'id_nhomtin' => 'required|integer|exists:nhom_tin,id_nhomtin'
        ]);

        $loaiTin = LoaiTin::create([
            'ten_loaitin' => $request->ten_loaitin,
            'id_nhomtin' => $request->id_nhomtin,
            'trangthai' => $request->trangthai ?? true
        ]);

        return response()->json(['message' => 'Thêm loại tin thành công!', 'data' => $loaiTin], 201);
    }

    //  API sửa loại tin
    public function suaLoaiTin(Request $request, $id)
    {
        $loaiTin = LoaiTin::find($id);
        if (!$loaiTin) {
            return response()->json(['message' => 'Loại tin không tồn tại!'], 404);
        }

        $request->validate([
            'ten_loaitin' => 'required|string|max:30',
            'id_nhomtin' => 'required|integer|exists:nhom_tin,id_nhomtin'
        ]);

        $loaiTin->update([
            'ten_loaitin' => $request->ten_loaitin,
            'id_nhomtin' => $request->id_nhomtin,
            'trangthai' => $request->trangthai ?? true
        ]);

        return response()->json(['message' => 'Cập nhật loại tin thành công!', 'data' => $loaiTin]);
    }

    // API xóa loại tin (Kiểm tra ràng buộc)
    public function xoaLoaiTin($id)
    {
        $loaiTin = LoaiTin::find($id);
        if (!$loaiTin) {
            return response()->json(['message' => 'Loại tin không tồn tại!'], 404);
        }

        // Kiểm tra nếu loại tin đã có tin tức thì không cho phép xóa
        $tinCount = Tin::where('id_loaitin', $id)->count();
        if ($tinCount > 0) {
            return response()->json(['message' => 'Không thể xóa! Loại tin này đã có tin tức.'], 400);
        }

        $loaiTin->delete();
        return response()->json(['message' => 'Xóa loại tin thành công!']);
    }
}
