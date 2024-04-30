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
                'name' => __('Mobile Suit Gundam')
            ],
            [
                'id' => 2,
                'name' => __('Mobile Suit Gundam The Origin')
            ],
            [
                'id' => 3,
                'name' => __('Mobile Suit Gundam The 08th MS Team')
            ],
            [
                'id' => 4,
                'name' => __('Mobile Suit Gundam MS IGLOO')
            ],
            [
                'id' => 5,
                'name' => __('Mobile Suit Gundam Thunderbolt')
            ],
            [
                'id' => 6,
                'name' => __('Mobile Suit Gundam 0080')
            ],
            [
                'id' => 7,
                'name' => __('Mobile Suit Gundam 0083')
            ],
            [
                'id' => 8,
                'name' => __('Mobile Suit Z Gundam')
            ],
            [
                'id' => 9,
                'name' => __('Mobile Suit Gundam ZZ')
            ],
            [
                'id' => 10,
                'name' => __('Mobile Suit Gundam: Char\'s Counterattack')
            ],
            [
                'id' => 11,
                'name' => __('Mobile Suit Gundam Unicorn')
            ],
            [
                'id' => 12,
                'name' => __('Mobile Suit Gundam NT (Narrative)')
            ],
            [
                'id' => 13,
                'name' => __('Mobile Suit Gundam Twilight AXIS')
            ],
            [
                'id' => 14,
                'name' => __('Mobile Suit GUNDAM Hathaway')
            ],
            [
                'id' => 15,
                'name' => __('Mobile Suit Gundam The Witch from Mercury')
            ]
        ];

        Product::insert($products);
    }
}
