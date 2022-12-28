<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Brand = [
            ['title' => 'brand 1','slug' => 'brand-1'],
            ['title' => 'brand 2','slug' => 'brand-2'],
            ['title' => 'brand 3','slug' => 'brand-3']
        ];
       Brand::insert($Brand);
    }
}
