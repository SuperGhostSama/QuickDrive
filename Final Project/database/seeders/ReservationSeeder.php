<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 50 reservations
        $users = User::all();
        $cars = Car::all();

        for ($i = 0; $i < 5; $i++) {
            $user = $users->random();
            $car = $cars->random();

            $reservation = new Reservation([
                'user_id' => $user->id,
                'car_id' => $car->id,
                'CIN' => 'CIN' . $i,
                'phone_number' => '123456789',
                'driving_licence_number' => 'DLN' . $i,
                'date_of_birth' => '1990-01-01',
                'start_date' => now()->addDays($i),
                'end_date' => now()->addDays($i+5),
            ]);

            $reservation->save();
        }
    }
}
