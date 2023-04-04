<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return response()->json([
            'data' => $cars
        ]);
    }

    public function show(Car $car)
    {
        return response()->json([
            'data' => $car
        ]);
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->image = $request->input('image');
        $car->brand_id = $request->input('brand_id');
        $car->model = $request->input('model');
        $car->body_type_id = $request->input('body_type_id');
        $car->seats = $request->input('seats');
        $car->color = $request->input('color');
        $car->fuel_type_id = $request->input('fuel_type_id');
        $car->mileage = $request->input('mileage');
        $car->transmission_id = $request->input('transmission_id');
        $car->power = $request->input('power');
        $car->length = $request->input('length');
        $car->width = $request->input('width');
        $car->height = $request->input('height');
        $car->cargo_volume = $request->input('cargo_volume');
        $car->price = $request->input('price');
        $car->status_id = $request->input('status_id');
        $car->save();

        return response()->json([
            'message' => 'Car created successfully',
            'data' => $car
        ]);
    }

    public function update(Request $request, Car $car)
    {
        $car->image = $request->input('image');
        $car->brand_id = $request->input('brand_id');
        $car->model = $request->input('model');
        $car->body_type_id = $request->input('body_type_id');
        $car->seats = $request->input('seats');
        $car->color = $request->input('color');
        $car->fuel_type_id = $request->input('fuel_type_id');
        $car->mileage = $request->input('mileage');
        $car->transmission_id = $request->input('transmission_id');
        $car->power = $request->input('power');
        $car->length = $request->input('length');
        $car->width = $request->input('width');
        $car->height = $request->input ('height');
        $car->cargo_volume = $request->input('cargo_volume');
        $car->price = $request->input('price');
        $car->status_id = $request->input('status_id');
        $car->save();
    
        return response()->json([
            'message' => 'Car updated successfully',
            'data' => $car
        ]);
    }
    
    public function destroy(Car $car)
    {
        $car->delete();
    
        return response()->json([
            'message' => 'Car deleted successfully'
        ]);
    }

}
