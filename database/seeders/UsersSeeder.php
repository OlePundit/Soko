<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 10,
                'shop_name'=>'Sherehe Drinks',
                'email'=> 'sherehe@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 11,
                'shop_name'=>'Liquor Shack',
                'email'=> 'liquor@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 12,
                'shop_name'=>'Jay Wines',
                'email'=> 'jay@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 13,
                'shop_name'=>'Thirsty oak',
                'email'=> 'thirsty@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 14,
                'shop_name'=>'The Bar',
                'email'=> 'thebar@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 15,
                'shop_name'=>'Liquor Square',
                'email'=> 'square@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 16,
                'shop_name'=>'Kinywaji',
                'email'=> 'kinywaji@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 17,
                'shop_name'=>'Liquor Spring',
                'email'=> 'spring@gmail.com',
                'password'=> '12345678'
            ],
            
            [
                'id' => 18,
                'shop_name'=>'Liquor Stream',
                'email'=> 'stream@gmail.com',
                'password'=> '12345678'
            ],
            [
                'id' => 19,
                'shop_name'=>'Good Fellaz',
                'email'=> 'fellaz@gmail.com',
                'password'=> '12345678'
            ],
            

        ];
        User::insert($user);
    }
}