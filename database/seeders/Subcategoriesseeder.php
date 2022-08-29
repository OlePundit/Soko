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
            [
                'subcategory' => 'wine',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'scotch',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'spirit',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'vodka',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'beer',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'rum',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'mixers',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'bourbon',
                'categories_id' => '1',
            ],
            [
                'subcategory' => 'cognac',
                'categories_id' => '1',
            ],  
            [
                'subcategory' => 'cream',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'other',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'spirit',
                'categories_id' => '1',
            ], 
            [
                'subcategory' => 'laptops and computers',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'video games and gaming consoles',
                'categories_id' => '4',
            ],
            [
                'subcategory' => 'accessories',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'phones and tablets',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'audio & music equipment',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'TVS',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'cameras',
                'categories_id' => '4',
            ], 
            [
                'subcategory' => 'furniture',
                'categories_id' => '6',
            ], 
            [
                'subcategory' => 'kitchen appliances',
                'categories_id' => '6',
            ], 
            [
                'subcategory' => 'beddings',
                'categories_id' => '6',
            ], 
            [
                'subcategory' => 'decor',
                'categories_id' => '6',
            ],
            [
                'subcategory' => 'office supplies and stationery',
                'categories_id' => '6',
            ],
            [
                'subcategory' => 'spareparts',
                'categories_id' => '5',
            ],
            [
                'subcategory' => 'motor vehicles',
                'categories_id' => '5',
            ],

            [
                'subcategory' => 'salvage',
                'categories_id' => '5',
            ],
            [
                'subcategory' => 'menswear',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'womenswear',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'childrenswear',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'unisex',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'sportswear',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'shoes',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'accessories',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'bags',
                'categories_id' => '7',
            ],
            [
                'subcategory' => 'jewellery',
                'categories_id' => '7',
            ],
            
            [
                'subcategory' => 'sales and marketing',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'clerical',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'programming',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'graphic design',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'errands',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'cleaning and laundry',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'pet services',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'writing',
                'categories_id' => '8',
            ],
        
            [
                'subcategory' => 'repair and mechanical services',
                'categories_id' => '8',
            ],
            [
                'subcategory' => 'land',
                'categories_id' => '9',
            ],
            [
                'subcategory' => 'buildings',
                'categories_id' => '9',
            ],
            [
                'subcategory' => 'other',
                'categories_id' => '9',
            ],
        ];

        Subcategory::insert($subcategories);
    }
}