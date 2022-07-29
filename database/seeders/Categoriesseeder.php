<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Categoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category' => 'liquor',
            ],
            [
                'category' => 'DIY',
            ],
            [
                'category' => 'food',
            ],
        ];
        Category::insert($categories);
    }
}

