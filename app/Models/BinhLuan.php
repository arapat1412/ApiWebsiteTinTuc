<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = 'binh_luan'; // Tên bảng trong database
    protected $primaryKey = 'id_binhluan'; // Khóa chính của bảng
    public $timestamps = false; // Bảng không có cột created_at & updated_at

    protected $fillable = [
        'email',
        'thoigian',
        'noidung',
        'trangthai',
        'id_tin'
    ];

    protected $casts = [
        'trangthai' => 'boolean',
        'thoigian' => 'datetime',
    ];

    // Định nghĩa quan hệ với bảng `tin`
    public function tin()
    {
        return $this->belongsTo(Tin::class, 'id_tin', 'id_tin');
    }
}
