<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\Transmission;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Search in cars table
        $cars = Car::where('model', 'like', "%$query%")->get();
        
        // Search in brands table
        $brands = Brand::where('name', 'like', "%$query%")->get();
        
        // Search in body_types table
        $bodyTypes = BodyType::where('name', 'like', "%$query%")->get();
        
        // Search in fuel_types table
        $fuelTypes = FuelType::where('name', 'like', "%$query%")->get();
        
        // Search in transmissions table
        $transmissions = Transmission::where('name', 'like', "%$query%")->get();
        
        return response()->json([
            'cars' => $cars,
            'brands' => $brands,
            'body_types' => $bodyTypes,
            'fuel_types' => $fuelTypes,
            'transmissions' => $transmissions,
        ]);
    }
}
