<?php

namespace App\Http\Controllers;

use App\Models\QuanTriVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAdminController
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'tendangnhap' => 'required|string',
            'matkhau' => 'required|string'
        ]);

        $qtv = QuanTriVien::where('tendangnhap', $data['tendangnhap'])->first();

        if (!Hash::check($data['matkhau'], $qtv->matkhau)) {
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
