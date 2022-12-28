<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoomType = [
            ['title' => 'Single Room','slug' => 'single-room'],
            ['title' => 'Double Room','slug' => 'double-room'],
            ['title' => 'Quad Bedroom','slug' => 'quad-bedroom'],
            ['title' => 'Queen Room','slug' => 'queen-room'],
            ['title' => 'King Room','slug' => 'single-room'],
            ['title' => 'Suite','slug' => 'suite'],
            ['title' => 'Mini-Suite','slug' => 'mini-suite'],
            ['title' => 'Deluxe Room','slug' => 'deluxe-room'],
            ['title' => 'Single Room','slug' => 'single-room'],
            ['title' => 'Super deluxe','slug' => 'super-deluxe'],
        ];
       RoomType::insert($RoomType);
    }
}
