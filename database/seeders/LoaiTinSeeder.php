<?php

namespace Database\Seeders;

use App\Models\LoaiTin;
use App\Models\NhomTin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nhomTin = [
            'Thể Thao' => ['Bóng đá', 'Bóng rổ', 'Tennis', 'Cầu lông', 'Đua xe'],
            'Giải Trí' => ['Phim ảnh', 'Âm nhạc', 'Game', 'Sách', 'Thời trang'],
            'Thế Giới' => ['Chính trị', 'Xã hội', 'Quân sự', 'Khoa học', 'Môi trường'],
            'Kinh Tế' => ['Chứng khoán', 'Bất động sản', 'Khởi nghiệp', 'Thương mại', 'Tài chính'],
            'Giáo Dục' => ['Học đường', 'Du học', 'Học bổng', 'Đào tạo nghề', 'Công nghệ giáo dục'],
        ];

        foreach ($nhomTin as $nhom => $loaiTins) {
            $nt = NhomTin::create([
                'ten_nhomtin' => $nhom
            ]);
            foreach ($loaiTins as $loai) {
                LoaiTin::create([
                    'ten_loaitin' => $loai,
                    'id_nhomtin' => $nt->id_nhomtin
                ]);
            }
        }
    }
}
