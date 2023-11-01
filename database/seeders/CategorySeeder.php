<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category
        $category = [
            [
                'type_id' => '1',
                'name' => 'Sports cars',
            ],
            [
                'type_id' => '1',
                'name' => 'SUVs',
            ],
            [
                'type_id' => '1',
                'name' => 'Coupes',
            ],
            [
                'type_id' => '1',
                'name' => 'Convertibles',
            ],
            [
                'type_id' => '1',
                'name' => 'Muscle car',
            ],
            [
                'type_id' => '1',
                'name' => 'Luxury sedans',
            ],
            [
                'type_id' => '2',
                'name' => 'Sports bike',
            ],
            [
                'type_id' => '2',
                'name' => 'Adventure / Touring',
            ],
            [
                'type_id' => '2',
                'name' => 'Cruiser / Chopper',
            ],
            [
                'type_id' => '2',
                'name' => 'Off-Road',
            ],
            [
                'type_id' => '2',
                'name' => 'Scooter',
            ],
        ];
        DB::table('categories')->insert($category);
    }
}
