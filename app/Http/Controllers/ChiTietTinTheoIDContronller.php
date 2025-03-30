<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tin;
use Illuminate\Http\Request;

class ChiTietTinTheoIDController extends Controller
{
    /**
     * API lấy chi tiết tin tức theo id_tin
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function layChiTietTin($id)
    {
        // Kiểm tra ID hợp lệ (phải là số nguyên dương)
        if (!is_numeric($id) || $id <= 0) {
            return response()->json([
                'success' => false,
                'message' => 'ID không hợp lệ'
            ], 400);
        }

        // Tìm tin tức theo ID
        $tin = Tin::find($id);

        // Kiểm tra nếu không tìm thấy tin tức
        if (!$tin) {
            return response()->json([
                'success' => false,
                'message' => 'Tin tức không tồn tại'
            ], 404);
        }

        // Trả về JSON chứa thông tin tin tức
        return response()->json([
            'success' => true,
            'data' => $tin
        ]);
    }
}
