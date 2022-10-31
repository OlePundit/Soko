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
        $users = [
            [
                'category' => 'liquor',
            ],
            [
                'category' => 'property',
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
                'category' => 'Commercial equipment',
            ],
            [
                'category' => 'DIY',
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