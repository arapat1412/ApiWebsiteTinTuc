<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{

    protected $table = 'tin'; // Tên bảng trong database
    protected $primaryKey = 'id_tin'; // Khóa chính của bảng
    public $timestamps = false; // Bảng không có cột created_at & updated_at

    protected $fillable = [
        'tieude',
        'hinhdaidien',
        'mota',
        'noidung',
        'ngaydangtin',
        'tacgia',
        'solanxem',
        'tinhot',
        'trangthai',
        'id_loaitin'
    ];

    protected $casts = [
        'tinhot' => 'boolean',
        'trangthai' => 'boolean',
        'ngaydangtin' => 'datetime',
    ];

    // Định nghĩa quan hệ với bảng `loai_tin`
    public function loaiTin()
    {
        return $this->belongsTo(LoaiTin::class, 'id_loaitin', 'id_loaitin');
    }
    // Định nghĩa quan hệ gián tiếp với bảng `nhom_tin` thông qua `loai_tin`
    public function nhomTin()
    {
        return $this->hasOneThrough(
            NhomTin::class, // Model đích
            LoaiTin::class, // Model trung gian
            'id_loaitin',   // Khóa ngoại trong bảng `loai_tin`
            'id_nhomtin',   // Khóa ngoại trong bảng `nhom_tin`
            'id_loaitin',   // Khóa chính của bảng `tin`
            'id_nhomtin'    // Khóa chính của bảng `loai_tin`
        );
    }
}
