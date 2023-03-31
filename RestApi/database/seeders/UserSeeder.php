<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(1)
            ->create()
            ->each(
                function($user) {
                    $user->assignRole('admin');
                }
            );

        User::factory()->count(1)
            ->create()
            ->each(
                function($user) {
                    $user->assignRole('moderator');
                }
            );
        User::factory()->count(1)
            ->create()
            ->each(
                function($user) {
                    $user->assignRole('user');
                }
            );
    }
}
