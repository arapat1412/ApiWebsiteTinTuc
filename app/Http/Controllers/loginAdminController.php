<?php

namespace App\Http\Controllers;

use App\Models\QuanTriVien;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'tendangnhap' => 'required|string',
            'matkhau' => 'required|string'
        ]);

        $qtv = QuanTriVien::where('tendangnhap', $data['tendangnhap'])
            ->where('matkhau', $data['matkhau']) // Nếu dùng hash thì dùng Hash::check
            ->first();

        if (!$qtv) {
            return response()->json([
                'message' => 'Đăng nhập thất bại. Sai thông tin đăng nhập.'
            ], 401);
        }

        return response()->json([
            'message' => 'Đăng nhập thành công',
            'qtv' => $qtv
        ]);
    }
}
