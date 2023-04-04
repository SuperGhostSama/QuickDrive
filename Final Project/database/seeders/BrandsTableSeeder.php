<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        // Add the Toyota brand
        DB::table('brands')->insert([
            'name' => 'Toyota'
        ]);

        // Add the Honda brand
        DB::table('brands')->insert([
            'name' => 'Honda'
        ]);

        // Add the Ford brand
        DB::table('brands')->insert([
            'name' => 'Ford'
        ]);

        // Add the Nissan brand
        DB::table('brands')->insert([
            'name' => 'Nissan'
        ]);

        // Add the Chevrolet brand
        DB::table('brands')->insert([
            'name' => 'Chevrolet'
        ]);
    }
}

