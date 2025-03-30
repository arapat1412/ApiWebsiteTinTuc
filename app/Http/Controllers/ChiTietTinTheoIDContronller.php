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
        // Tìm tin tức theo ID
        $tin = Tin::find($id);
        
        
        if (!$tin) {
            return response()->json(['message' => 'Tin tức không tồn tại'], 404);
        }

        
        return response()->json($tin);
    }
}
