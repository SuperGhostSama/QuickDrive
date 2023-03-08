<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(BodyTypesSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CarStatusesTableSeeder::class);
        $this->call(FuelTypesTableSeeder::class);
        $this->call(TransmissionsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
    }
}
