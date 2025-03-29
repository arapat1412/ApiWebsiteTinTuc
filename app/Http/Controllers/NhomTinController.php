<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhomTin;
use App\Models\LoaiTin;
use Illuminate\Http\JsonResponse;

class NhomTinController 
{
    // Lấy danh sách nhóm tin
    public function index(): JsonResponse
    {
        $nhomTins = NhomTin::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Lấy danh sách nhóm tin thành công',
            'data' => $nhomTins,
        ], 200);
    }

    // Thêm mới nhóm tin
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'ten_nhomtin' => 'required|string|max:30',
            'trangthai' => 'boolean',
        ]);

        $nhomTin = NhomTin::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Thêm nhóm tin thành công',
            'data' => $nhomTin,
        ], 201);
    }

    // Sửa nhóm tin
    public function update(Request $request, $id): JsonResponse
    {
        $validated = $request->validate([
            'ten_nhomtin' => 'required|string|max:30',
            'trangthai' => 'boolean',
        ]);

        $nhomTin = NhomTin::findOrFail($id);
        $nhomTin->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật nhóm tin thành công',
            'data' => $nhomTin,
        ], 200);
    }

    // Xóa nhóm tin
    public function destroy($id): JsonResponse
    {
        $nhomTin = NhomTin::findOrFail($id);

        // Kiểm tra ràng buộc với loại tin
        if (LoaiTin::where('id_nhomtin', $id)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Nhóm đã có loại tin, không thể xóa!',
            ], 400);
        }

        $nhomTin->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Xóa nhóm tin thành công',
        ], 200);
    }
}
