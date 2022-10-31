<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = [
            [
                'id' => 10,
                'user_id' => 10,
                'description'=>'dial +254702898888',
                'url'=> 'https://sherehedrinks.co.ke/',
            ],
            [
                'id' => 11,
                'user_id' => 11,
                'description'=>'dial 0700 044 154',
                'url'=> 'https://www.liquorshack.co.ke/',
            ],
            [
                'id' => 12,
                'user_id' => 12,
                'description'=>'=254 705 570 066',
                'url'=> 'https://jayswines.com/',
            ],
            [
                'id' => 13,
                'user_id' => 13,
                'description'=>'0717 593 607',
                'url'=> 'https://thirsty.co.ke/',
            ],
            [
                'id' => 14,
                'user_id' => 14,
                'description'=>'0111047700',
                'url'=> 'thebar@gmail.com',
            ],
            [
                'id' => 15,
                'user_id' => 15,
                'description'=>'0712 545 454',
                'url'=> 'https://liquorsquare.co.ke/',
            ],
            [
                'id' => 16,
                'user_id' => 16,
                'description'=>'714568157',
                'url'=> 'https://kinywaji.com/',
            ],
            [
                'id' => 17,
                'user_id' => 17,
                'description'=>'7056461686',
                'url'=> 'https://liquorspring.co.ke/',
            ],
            
            [
                'id' => 18,
                'user_id' => 18,
                'description'=>'+254720518757',
                'url'=> 'https://liquorstream.co.ke/',
            ],
            [
                'id' => 19,
                'user_id' => 19,
                'description'=>'+254 719 296 685',
                'url'=> 'https://goodfellaz.co.ke/',
            ],
            

        ];
        Shop::insert($shop);
    }
}