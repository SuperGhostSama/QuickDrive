<?php

namespace Database\Seeders;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 7; $i++) {
            $contact = new Contact();
            
            $contact->full_name = $faker->name();
            $contact->email = $faker->email();
            $contact->message = $faker->sentence();
            $contact->created_at = Carbon::now()->subDays(rand(1, 30))->subHours(rand(1, 23))->subMinutes(rand(1, 59));
            
            $contact->save();
        }
    }
}
