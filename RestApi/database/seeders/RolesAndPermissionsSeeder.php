<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        $viewMyprofile = 'view my profile';
        $viewAllprofile = 'view all profile';
        $editMyProfile = 'edit my profile';
        $editAllProfile = 'edit all profile';
        $deleteMyProfile = 'delete my profile';
        $deleteAllProfile = 'delete all profile';

        $addReservation ='add reservation';
        $viewMyReservation ='view my reservation';
        $viewAllReservations ='view all reservations';
        $deleteMyReservation ='delete my reservation';
        $deleteAllReservations ='delete all reservations';

        $addCar = 'add car';
        $editAllCar = 'edit all cars';
        $deleteAllCar = 'delete all cars';
        

        $addBrand = 'add brand';
        $editBrand = 'edit brand';
        $deleteBrand = 'delete brand';
        

        $assignRole = 'assign role';

        $viewAllUsers = 'view all users';

        Permission::create(['name' => $viewMyprofile]);
        Permission::create(['name' => $viewAllprofile]);
        Permission::create(['name' => $editMyProfile]);
        Permission::create(['name' => $editAllProfile]);
        Permission::create(['name' => $deleteMyProfile]);
        Permission::create(['name' => $deleteAllProfile]);

        Permission::create(['name' => $addReservation]);
        Permission::create(['name' => $viewMyReservation]);
        Permission::create(['name' => $viewAllReservations]);
        Permission::create(['name' => $deleteMyReservation]);
        Permission::create(['name' => $deleteAllReservations]);


        Permission::create(['name' => $addCar]);
        Permission::create(['name' => $editAllCar]);
        Permission::create(['name' => $deleteAllCar]);

        Permission::create(['name' => $addBrand]);
        Permission::create(['name' => $editBrand]);
        Permission::create(['name' => $deleteBrand]);

        Permission::create(['name' => $assignRole]);

        Permission::create(['name' => $viewAllUsers]);
        
        // Define roles available
        $admin = 'admin';
        $moderator = 'moderator';
        $user = 'user';

        Role::create(['name' => $admin])->givePermissionTo(Permission::all());

        Role::create(['name' => $moderator])->givePermissionTo([
            $addCar,
            $editAllCar,
            $deleteAllCar,

            $addBrand,
            $editBrand,
            $deleteBrand,

            $editMyProfile,
            $deleteMyProfile,
            $viewMyprofile,

            $addReservation,
            $viewMyReservation,
            $viewAllReservations,
            $deleteAllReservations,

            $viewAllUsers,

        ]);

        Role::create(['name' => $user])->givePermissionTo([
            $editMyProfile,
            $deleteMyProfile,
            $viewMyprofile,
            
            $addReservation,
            $viewMyReservation,
        ]);
    }
}
