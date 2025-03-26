<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuanTriVien extends Model
{
    protected $table = 'quan_tri_vien'; // Tên bảng trong database
    protected $primaryKey = 'id_qtv'; // Khóa chính
    public $timestamps = false; // Không sử dụng timestamps (created_at, updated_at)

    protected $fillable = [
        'tendangnhap',
        'matkhau',
        'ten_qtv'
    ];

    protected $hidden = [
        'matkhau', // Ẩn mật khẩu khi chuyển đổi sang mảng hoặc JSON
    ];

    // Đặt trường mật khẩu
    public function getAuthPassword()
    {
       return 'matkhau';
    }

    // Đặt trường tên đăng nhập
    public function getAuthIdentifierName()
    {
        return 'tendangnhap';
    }
}
