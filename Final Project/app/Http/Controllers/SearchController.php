<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function search(Request $request){
    $query = request()->input('query');

  $brands = Car::whereHas('brand', function (Builder $queryy) {
    $queryy->where('name', 'like', '%'.request()->input('query').'%');
})->get();
  $cars = Car::where('model', 'like', '%'.$query.'%')->get();

  $cars = $cars->merge($brands);
  return view('pages.allcars', compact('cars'));
    }

}

