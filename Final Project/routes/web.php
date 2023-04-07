<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Authentification
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Brands
Route::get('brands', [BrandsController::class, 'index'])->middleware('permission:view brands');
Route::get('brands/{brand}', [BrandsController::class, 'show']);

Route::group(['controller' => BrandsController::class,'middleware'=>'auth'], function () {
    Route::post('brands','store')->middleware('permission:add brand')->name('brands.store');
    Route::put('brands','update')->middleware('permission:edit brand')->name('brands.update');
    Route::delete('brands/{brand}','destroy')->middleware('permission:delete brand')->name('brands.destroy');
});

//Cars crud
Route::get('cars', [CarsController::class, 'index'])->middleware('permission:view cars');
Route::get('cars/{car}', [CarsController::class, 'show']);

Route::group(['controller' => CarsController::class,'middleware'=>'auth'], function () {
    Route::post('cars','store')->middleware('permission:add car')->name('cars.store');
    Route::put('cars', 'update')->middleware('permission:edit all cars')->name('cars.update');
    Route::delete('cars/{car}', 'destroy')->middleware('permission:delete all cars')->name('cars.destroy');
});

// Profile
Route::group(['controller' => ProfileController::class,'middleware'=>'auth'], function () {
    Route::get('profile','index')->name('profile');
    Route::post('user/{user}','updateProfile')->middleware('permission:edit my profile|edit all profile')->name('profile.update');
    Route::delete('user/{user}','deleteProfile')->middleware('permission:delete my profile|delete all profile')->name('profile.delete');
});


//Fetch all users
Route::group(['controller' => UserController::class,'middleware'=>'auth'], function () {
    Route::get('users','index')->middleware('permission:view all users')->name('users');
    Route::get('users/{user}','show')->middleware('permission:view all users')->name('show users');
    Route::put('assign-role/', 'assignRole')->middleware('permission:assign role')->name('assign.role');
});

//Roles
Route::group(['controller' => RolesController::class,'middleware'=>'auth'], function () {
    Route::get('roles','index')->name('users');
});

//Contact Us
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts', [ContactController::class, 'index'])->middleware('permission:view all contacts')->name('contactus');
Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->middleware('permission:delete contacts')->name('contacts.destroy');

//All Cars
Route::get('allcars', [CarsController::class, 'allcars'])->name('all.cars');
Route::get('allcars/ascending', [CarsController::class, 'sortAscending'])->name('cars.ascending');
Route::get('allcars/descending', [CarsController::class, 'sortDescending'])->name('cars.descending');


//Landing page
Route::get('/',[CarsController::class, 'recentlyAddedCars'])->name('recentlyAddedCars');

//Car Detail
Route::get('cardetail/{car}', [CarsController::class, 'showOne'])->name('car.detail');


//Reservation
Route::group(['controller' => ReservationController::class,'middleware'=>'auth'], function () {
    Route::get('reservations','index')->middleware('permission:view all reservations')->name('reservations');
    Route::get('reservations/{id}','show')->middleware('permission:view my reservation|view all reservations');
    Route::post('reservations/{car}','store')->middleware('permission:add reservation')->name('reservations.store');
    Route::put('reservations','update')->middleware('permission:update reservations')->name('reservations.update');
    Route::delete('reservations/{reservation}','destroy')->middleware('permission:delete my reservation|delete all reservations')->name('reservations.destroy');
    Route::get('myreservations','myReservations')->middleware('permission:view my reservation')->name('myreservations');
});


// Route::get('/MyReservations', function()
// {
//    return View::make('pages.dashboard-myreservations');
// });

// Route::get('/404', function()
// {
//    return View::make('errors.404');
// });

// Route::get('/dashboard', function()
// {
//    return View::make('pages.dashboard');
// });


// Route::get('/dashboard-reservations', function()
// {
//    return View::make('pages.dashboard-reservations');
// });




