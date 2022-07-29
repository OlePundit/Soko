<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class Subcategoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            [
                'subcategory' => 'whisky',
                'categories_id' => '1',
            ],
            [
                'subcategory' => 'gin',
                'categories_id' => '1',
            ],

            [
                'subcategory' => 'brandy',
                'categories_id' => '1',
            ], 
        ];

        Subcategory::insert($subcategories);
    }
}