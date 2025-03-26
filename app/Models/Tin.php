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
}
