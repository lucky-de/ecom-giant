<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $Category = [
            ['title' => 'Appliances','slug' => 'appliances'],
            ['title' => 'Automobiles & Spare Parts','slug' => 'automobiles-spare-parts'],
            ['title' => 'Beauty & Personal Care','slug' => 'beauty-personal-care'],
            ['title' => 'Electronics','slug' => 'electronics'],
            ['title' => 'Clothing & Shoes','slug' => 'clothing-shoes'],
            ['title' => 'Jewelry & Watches','slug' => 'jewelry-watches']
        ];
       Category::insert($Category);
    }
}
