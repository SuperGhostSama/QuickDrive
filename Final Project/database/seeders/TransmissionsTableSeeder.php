<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransmissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Add the automatic transmission
        DB::table('transmissions')->insert([
            'name' => 'automatic'
        ]);

        // Add the manual transmission
        DB::table('transmissions')->insert([
            'name' => 'manual'
        ]);
    }
}



