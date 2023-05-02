<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => '機動戰士鋼彈'
            ],
            [
                'id' => 2,
                'name' => '機動戰士鋼彈 THE ORIGIN'
            ],
            [
                'id' => 3,
                'name' => '機動戰士鋼彈 第 08MS 小隊'
            ],
            [
                'id' => 4,
                'name' => '機動戰士鋼彈 MS IGLOO'
            ],
            [
                'id' => 5,
                'name' => '機動戰士鋼彈 雷霆宙域戰線'
            ],
            [
                'id' => 6,
                'name' => '機動戰士鋼彈 0080'
            ],
            [
                'id' => 7,
                'name' => '機動戰士鋼彈 0083'
            ],
            [
                'id' => 8,
                'name' => '機動戰士 Z 鋼彈'
            ],
            [
                'id' => 9,
                'name' => '機動戰士鋼彈 ZZ'
            ],
            [
                'id' => 10,
                'name' => '機動戰士鋼彈 逆襲的夏亞'
            ],
            [
                'id' => 11,
                'name' => '機動戰士鋼彈 UNICORN'
            ],
            [
                'id' => 12,
                'name' => '機動戰士鋼彈 NT'
            ],
            [
                'id' => 13,
                'name' => '機動戰士鋼彈 Twilight AXIS'
            ],
            [
                'id' => 14,
                'name' => '機動戰士鋼彈 閃光的哈薩威'
            ],
            [
                'id' => 15,
                'name' => '機動戰士鋼彈 水星的魔女'
            ]
        ];

        Product::insert($products);
    }
}
