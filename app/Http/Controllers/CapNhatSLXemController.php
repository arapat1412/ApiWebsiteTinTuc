<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class CapNhatSLXemController
{
    public function capNhatLuotXem(Request $request, $id)
    {
        $tin = Tin::find($id);

        if (!$tin) {
            return; // Không làm gì nếu không tìm thấy
        }

        // Tạo key cookie riêng cho tin này
        $cookieKey = "tin_da_xem_$id";

        // Kiểm tra xem client đã xem trong 5 phút qua chưa
        if (!$request->hasCookie($cookieKey)) {
            // Nếu chưa xem, tăng số lần xem
            $tin->increment('solanxem');

            // Gửi cookie để đánh dấu đã xem trong 5 phút
            cookie()->queue(cookie($cookieKey, true, 5)); // 5 phút
            return response()->json([
                'message' => 'Đã tăng số lượt xem',
                'solanxem' => $tin->solanxem
            ]);
        } else {
            return response()->json([
                'message' => 'Bạn đã xem tin này gần đây (trong 5 phút)',
                'solanxem' => $tin->solanxem
            ]);
        }
    }
}
