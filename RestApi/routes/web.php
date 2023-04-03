<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function()
{
   return View::make('pages.home');
});

Route::get('/allcars', function()
{
   return View::make('pages.allcars');
});

Route::get('/cardetail', function()
{
   return View::make('pages.cardetail');
});

Route::get('/login', function()
{
   return View::make('pages.login');
});

Route::get('/register', function()
{
   return View::make('pages.register');
});

Route::get('/dashboard', function()
{
   return View::make('pages.dashboard');
});


