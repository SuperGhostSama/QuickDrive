<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Authentification
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

//Forgot-Reset password 
Route::group(['controller' => ResetPasswordController::class], function (){
    // Request password reset link
    Route::post('forgot-password', 'sendResetLinkEmail')->middleware('guest')->name('password.email');
    // Reset password
    Route::post('reset-password', 'resetPassword')->middleware('guest')->name('password.update');

    Route::get('reset-password/{token}', function (string $token) {
         return $token;
     })->middleware('guest')->name('password.reset');
});

//Brands
Route::get('/brands', [BrandsController::class, 'index']);
Route::get('/brands/{brand}', [BrandsController::class, 'show']);

Route::group(['controller' => BrandsController::class,'middleware'=>'auth:api'], function () {
    Route::post('/brands','store')->middleware('permission:add brand');;
    Route::put('/brands/{brand}','update')->middleware('permission:edit brand');;
    Route::delete('/brands/{brand}','destroy')->middleware('permission:delete brand');;
});

//Cars crud
Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/{car}', [CarsController::class, 'show']);

Route::group(['controller' => CarsController::class,'middleware'=>'auth:api'], function () {
    Route::post('/cars','store')->middleware('permission:add car');
    Route::put('/cars/{car}', 'update')->middleware('permission:edit all cars');
    Route::delete('/cars/{car}', 'destroy')->middleware('permission:delete all cars');
});

// Profile
Route::group(['controller' => ProfileController::class,'middleware'=>'auth:api'], function () {
    Route::put('user/{user}','updateProfile')->middleware('permission:edit my profile|edit all profile');
    Route::delete('user/{user}','deleteProfile')->middleware('permission:delete my profile|delete all profile');
});

//Roles
Route::group(['controller' => RolesController::class,'middleware'=>'auth:api'], function () {
    Route::post('assign-role/{id}', 'assignRole')->middleware('permission:assign role');
    Route::post('remove-role/{id}', 'removeRole')->middleware('permission:assign role');
});

//Fetch all users
Route::group(['controller' => UserController::class,'middleware'=>'auth:api'], function () {
    Route::get('users','index')->middleware('permission:view all users');
});

//Reservation
Route::group(['controller' => ReservationController::class,'middleware'=>'auth:api'], function () {
    Route::get('reservations','index')->middleware('permission:view all reservations');
    Route::get('reservations/{id}','show')->middleware('permission:view my reservation|view all reservations');
    Route::post('reservations','store')->middleware('permission:add reservation');
    Route::put('reservations/{id}','update')->middleware('permission:update reservations');
    Route::delete('reservations/{id}','destroy')->middleware('permission:delete my reservation|delete all reservations');
});

//Contact Us
Route::post('contacts', [ContactController::class, 'store']);

Route::group(['controller' => ContactController::class,'middleware'=>'auth:api'], function () {
    Route::get('contacts','index')->middleware('permission:view all contacts');
    Route::get('contacts/{id}','show')->middleware('permission:view one contacts');
    Route::delete('contacts/{id}','destroy')->middleware('permission:delete contacts');
});



