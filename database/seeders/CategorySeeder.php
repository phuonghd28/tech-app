<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'CCTV',
                'image' => 'https://hlassets.paessler.com/common/files/preview/cctv-topology.jpg',
                'description' => 'Công nghệ CCTV',
            ],
            [
                'id' => 2,
                'name' => 'Mạng',
                'image' => 'https://www.xtmobile.vn/vnt_upload/news/06_2019/14/featured-mang-5g-xtmobile.jpg',
                'description' => 'Công nghệ mạng',
            ],
            [
                'id' => 3,
                'name' => 'Văn phòng',
                'image' => 'https://aeros.vn/upload/images/van-phong/aeros-thiet-ke-van-phong-cong-ty-dien-tich-lon-3.webp',
                'description' => 'Công nghệ văn phòng',
            ],
            [
                'id' => 4,
                'name' => 'Máy tính',
                'image' => 'https://4words.edu.vn/wp-content/uploads/2021/05/Khoa-h%E1%BB%8Dc-m%C3%A1y-t%C3%ADnh.jpg',
                'description' => 'Công nghệ máy tính',
            ]
        ]);
    }
}
