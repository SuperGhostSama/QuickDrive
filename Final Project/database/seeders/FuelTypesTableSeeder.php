<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypesTableSeeder extends Seeder
{
    public function run()
    {
        // Add the Electrical fuel type
        DB::table('fuel_types')->insert([
            'name' => 'Electrical'
        ]);

        // Add the Gasoline fuel type
        DB::table('fuel_types')->insert([
            'name' => 'Gasoline'
        ]);

        // Add the Diesel fuel type
        DB::table('fuel_types')->insert([
            'name' => 'Diesel'
        ]);

        // Add the Hydrogen fuel type
        DB::table('fuel_types')->insert([
            'name' => 'Hybrid'
        ]);
    }
}