<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'loai_tin'; // Tên bảng trong database
    protected $primaryKey = 'id_loaitin'; // Khóa chính
    public $timestamps = false; // Không sử dụng timestamps (created_at, updated_at)

    protected $fillable = [
        'ten_loaitin',
        'trangthai',
        'id_nhomtin'
    ];

    public function nhomTin()
    {
        return $this->belongsTo(NhomTin::class, 'id_nhomtin', 'id_nhomtin');
    }
}
