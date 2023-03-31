<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarStatusesTableSeeder extends Seeder
{
    public function run()
    {
        // Add the available car status
        DB::table('car_statuses')->insert([
            'status' => 'available'
        ]);

        // Add the reserved car status
        DB::table('car_statuses')->insert([
            'status' => 'reserved'
        ]);
    }
}
