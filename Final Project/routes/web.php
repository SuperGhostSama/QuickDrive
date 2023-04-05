<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Brands
Route::get('brands', [BrandsController::class, 'index']);
Route::get('brands/{brand}', [BrandsController::class, 'show']);

Route::group(['controller' => BrandsController::class,'middleware'=>'auth'], function () {
    Route::post('brands','store')->middleware('permission:add brand')->name('brands.store');
    Route::put('brands','update')->middleware('permission:edit brand')->name('brands.update');
    Route::delete('brands/{brand}','destroy')->middleware('permission:delete brand')->name('brands.destroy');
});

//Cars crud
Route::get('cars', [CarsController::class, 'index']);
Route::get('cars/{car}', [CarsController::class, 'show']);

Route::group(['controller' => CarsController::class,'middleware'=>'auth'], function () {
    Route::post('cars','store')->middleware('permission:add car')->name('cars.store');
    Route::put('cars', 'update')->middleware('permission:edit all cars')->name('cars.update');
    Route::delete('cars/{car}', 'destroy')->middleware('permission:delete all cars')->name('cars.destroy');
});



Route::get('/', function()
{
   return View::make('pages.home');
});

// Route::get('/allcars', function()
// {
//    return View::make('pages.allcars');
// });

// Route::get('/cardetail', function()
// {
//    return View::make('pages.cardetail');
// });

// Route::get('/forgot-password', function()
// {
//    return View::make('pages.forgot-password');
// });

// Route::get('/reset-password', function()
// {
//    return View::make('pages.reset-password');
// });

// Route::get('/dashboard', function()
// {
//    return View::make('pages.dashboard');
// });

// Route::get('/dashboard-cars', function()
// {
//    return View::make('pages.dashboard-cars');
// });

// Route::get('/dashboard-brands', function()
// {
//    return View::make('pages.dashboard-brands');
// });

// Route::get('/dashboard-users', function()
// {
//    return View::make('pages.dashboard-users');
// });

// Route::get('/dashboard-contactus', function()
// {
//    return View::make('pages.dashboard-contactus');
// });

// Route::get('/dashboard-reservations', function()
// {
//    return View::make('pages.dashboard-reservations');
// });

// Route::get('/dashboard-profile', function()
// {
//    return View::make('pages.dashboard-profile');
// });




