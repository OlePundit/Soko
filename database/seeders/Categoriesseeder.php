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
                'category' => 'food & grocery',
            ],
            [
                'category' => 'electronics',
            ],
            [
                'category' => 'vehicles',
            ],
            [
                'category' => 'home & office',
            ],
            [
                'category' => 'clothing & jewellery',
            ],
            [
                'category' => 'services',
            ],
            [
                'category' => 'property',
            ],
            [
                'category' => 'Commercial equipment',
            ],
            [
                'category' => 'animals & pets',
            ],
            [
                'category' => 'other',
            ],
            

        ];
        Category::insert($categories);
    }
}

