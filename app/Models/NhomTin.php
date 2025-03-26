<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhomTin extends Model
{
    protected $table = 'nhom_tin'; // Tên bảng trong database
    protected $primaryKey = 'id_nhomtin'; // Khóa chính
    public $timestamps = false; // Không sử dụng timestamps (created_at, updated_at)

    protected $fillable = [
        'ten_nhomtin',
        'trangthai'
    ];

    public function danhSachLoaiTin()
    {
        return $this->hasMany(LoaiTin::class, 'id_nhomtin', 'id_nhomtin');
    }
}
