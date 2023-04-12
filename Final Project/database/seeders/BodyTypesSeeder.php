<?php

namespace Database\Seeders;

use App\Models\BodyType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BodyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('body_types')->insert([
    //         'name' => 'Sedan',
    //     ]);

    //     DB::table('body_types')->insert([
    //         'name' => 'SUV',
    //     ]);
    // }

    public function run()
    {
        $body_types = [
            'Sedan',
            'Hatchback',
            'Coupe',
            'Convertible',
            'SUV',
            'Crossover',
            'Pickup Truck',
            'Minivan',
            'Station Wagon'
        ];

        foreach ($body_types as $type) {
            BodyType::create([
                'name' => $type
            ]);
        }
    }
}
