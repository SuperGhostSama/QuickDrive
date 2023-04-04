<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class SearchController extends Controller
{
    public function search(Request $request){
    $query = $request->input('query');

    $cars = Car::join('brands', 'brands.id', '=', 'cars.brand_id')
                ->where('cars.model', 'LIKE', '%'.$query.'%')
                ->orWhere('brands.name', 'LIKE', '%'.$query.'%')
                ->get();

    return response()->json(['cars' => $cars]);
    }

}

