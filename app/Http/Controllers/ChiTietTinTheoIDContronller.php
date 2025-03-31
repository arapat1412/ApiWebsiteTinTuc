<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;

class ChiTietTinTheoIDController 
{
    public function layChiTietTin($id)
    {
        try {
            // Tìm tin tức theo ID, nếu không tìm thấy sẽ trả về 404
            $tin = Tin::findOrFail($id);

            // Trả về JSON chứa thông tin tin tức
            return response()->json([
                'success' => true,
                'data' => $tin
            ]);
        } catch (\Exception $e) {
            // Xử lý khi không tìm thấy tin
            return response()->json([
                'success' => false,
                'message' => 'Tin tức không tồn tại'
            ], 404);
        }
    }
}
