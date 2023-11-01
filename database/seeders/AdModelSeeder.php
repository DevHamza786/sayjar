<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Model
        $Model = [
            [
                'type_id' => '1',
                'name' => 'Abarth',
            ],
            [
                'type_id' => '1',
                'name' => '124 ML',
            ],
            [
                'type_id' => '1',
                'name' => '595',
            ],
            [
                'type_id' => '1',
                'name' => 'F595',
            ],
            [
                'type_id' => '1',
                'name' => '695',
            ],
            [
                'type_id' => '1',
                'name' => 'other',
            ],
            [
                'type_id' => '2',
                'name' => 'Acura',
            ],
            [
                'type_id' => '2',
                'name' => 'MDX',
            ],
            [
                'type_id' => '2',
                'name' => 'RDX',
            ],
            [
                'type_id' => '2',
                'name' => 'RSX/Integra',
            ],
            [
                'type_id' => '2',
                'name' => 'TLX',
            ],
        ];
        DB::table('ad_models')->insert($Model);
    }
}
