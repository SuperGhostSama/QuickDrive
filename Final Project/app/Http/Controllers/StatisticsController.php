<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Brand;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function dashboardStatistics()
    {
        if(Auth::check()){
            if(Auth::user()->hasRole(['admin', 'moderator'])){
                $user = User::count();
                $car = Car::count();
                $brand = Brand::count();
                $reservation = Reservation::count();
                return view('pages.dashboard', ['user' => $user,'car' => $car,'brand' => $brand,'reservation' => $reservation,]);
            }
            return view('errors.403');
        }
        return view('pages.login');
    }

}
