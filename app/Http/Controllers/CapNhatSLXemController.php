<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class CapNhatSLXemController extends Controller
{
    public function capNhat($id)
    {
        $tin = Tin::find($id);

        if (!$tin) {
            return response()->json(['message' => 'Không tìm thấy tin'], 404);
        }

        $tin->increment('solanxem');

        return response()->json([
            'message' => 'Đã cập nhật số lần xem',
            'solanxem' => $tin->solanxem
        ]);
    }
}
