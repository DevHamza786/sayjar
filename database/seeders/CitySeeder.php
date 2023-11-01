<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = [
            [
                'name' => 'Dubai',
            ],
            [
                'name' => 'Abu Dhabi',
            ],
            [
                'name' => 'Ras al Khaimah',
            ],
            [
                'name' => 'Sharjah',
            ],
            [
                'name' => 'Fujairah',
            ],
            [
                'name' => 'Ajman',
            ],
            [
                'name' => 'Umm al Quwain',
            ],
            [
                'name' => 'Al Ain',
            ]

        ];

        DB::table('cities')->insert($city);
    }
}
