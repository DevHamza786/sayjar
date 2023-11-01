<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'car',
                'status' => 'active'
            ],
            [
                'name' => 'bike',
                'status' => 'active'
            ],
            [
                'name' => 'motorboats',
                'status' => 'active'
            ],
            [
                'name' => 'heavyvihcles',
                'status' => 'active'
            ],
        ];

        DB::table('post_types')->insert($types);
    }
}
