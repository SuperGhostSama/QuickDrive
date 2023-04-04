<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        // Add the first car
        DB::table('cars')->insert([
            'image' => 'car1.jpg',
            'brand_id' => 1,
            'model' => 'Camry',
            'body_type_id' => 1,
            'seats' => 5,
            'color' => 'silver',
            'fuel_type_id' => 1,
            'mileage' => 50000,
            'transmission_id' => 1,
            'power' => '250',
            'length' => '4.9',
            'width' => '1.8',
            'height' => '1.4',
            'cargo_volume' => '15.1',
            'price' => 200,
            'status' => 'Available',

        ]);
        DB::table('cars')->insert([
            'image' => 'car2.jpg',
            'brand_id' => 2,
            'model' => 'Civic',
            'body_type_id' => 2,
            'seats' => 5,
            'color' => 'red',
            'fuel_type_id' => 2,
            'mileage' => 20000,
            'transmission_id' => 2,
            'power' => '180',
            'length' => '4.6',
            'width' => '1.8',
            'height' => '1.4',
            'cargo_volume' => '14.7',
            'price' => 300,
            'status' => 'Reserved',
        ]);
    }
}

