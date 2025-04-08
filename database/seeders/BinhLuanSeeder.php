<?php

namespace Database\Seeders;

use App\Models\BinhLuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i < 26; $i++) {
            for($y = 0; $y < 5; $y++){
                BinhLuan::create([
                    'email' => $faker->unique()->safeEmail,
                    'thoigian' => $faker->dateTimeThisYear,
                    'noidung' => $faker->sentence(100),
                    'trangthai' => $faker->randomElement([0, 1]), // 0 = chưa duyệt, 1 = đã duyệt
                    'id_tin' => $i
                ]);
            }
        }
    }
}
