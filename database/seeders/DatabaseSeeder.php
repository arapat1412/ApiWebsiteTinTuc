<?php

namespace Database\Seeders;

use App\Models\LoaiTin;
use App\Models\QuanTriVien;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        QuanTriVien::create([
            'tendangnhap' => 'admin',
            'matkhau' => Hash::make('123'),
            'ten_qtv' => 'Admin'
        ]);
        $this->call([
            LoaiTinSeeder::class,
            TinSeeder::class
        ]);
    }
}
