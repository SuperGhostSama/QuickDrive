<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\Transmission;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        // $cars = Car::all();
        $cars = Car::with(['brand','bodytype','fueltype','transmission'])->get();
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();

        return view('pages.dashboard-cars',compact('cars','brands','bodyTypes','fuelTypes','transmissions'));
    }

    public function show(Car $car)
    {
        return response()->json([
            'car' => $car,
            'brands' => Brand::all(),
            'bodytype' => BodyType::all(),
            'fueltype' => FuelType::all(),
            'transmission' => Transmission::all(),
            
        ]);
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->image = $request->input('image');
        $car->brand_id = $request->input('brand');
        $car->model = $request->input('model');
        $car->body_type_id = $request->input('bodytype');
        $car->seats = $request->input('seats');
        $car->color = $request->input('color');
        $car->fuel_type_id = $request->input('fueltype');
        $car->mileage = $request->input('mileage');
        $car->transmission_id = $request->input('transmission');
        $car->power = $request->input('power');
        $car->length = $request->input('length');
        $car->width = $request->input('width');
        $car->height = $request->input('height');
        $car->cargo_volume = $request->input('cargo');
        $car->price = $request->input('price');
        $car->status = $request->input('status');
        $car->save();

        // return response()->json([
        //     'message' => 'Car created successfully',
        //     'data' => $car
        // ]);

        return $this->index();
    }

    public function update(Request $request)
    {
        $car = Car::find($request->id);
        // dd($car);
        $car->image = $request->input('image');
        $car->brand_id = $request->input('brand');
        $car->model = $request->input('model');
        $car->body_type_id = $request->input('bodytype');
        $car->seats = $request->input('seats');
        $car->color = $request->input('color');
        $car->fuel_type_id = $request->input('fueltype');
        $car->mileage = $request->input('mileage');
        $car->transmission_id = $request->input('transmission');
        $car->power = $request->input('power');
        $car->length = $request->input('length');
        $car->width = $request->input('width');
        $car->height = $request->input('height');
        $car->cargo_volume = $request->input('cargo');
        $car->price = $request->input('price');
        $car->status = $request->input('status');
        $car->update();
    
        // return response()->json([
        //     'message' => 'Car updated successfully',
        //     'data' => $car
        // ]);
        return $this->index();
    }
    
    public function destroy(Car $car)
    {
        $car->delete();
    
        // return response()->json([
        //     'message' => 'Car deleted successfully'
        // ]);

        return redirect()->back();
    }

    public function allcars()
    {
        // $cars = Car::all();
        $cars = Car::with(['brand','bodytype','fueltype','transmission'])->get();
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();

        return view('pages.allcars',compact('cars','brands','bodyTypes','fuelTypes','transmissions'));
    }

    public function sortAscending()
    {
        $cars = Car::with(['brand', 'bodytype', 'fueltype', 'transmission'])
                ->orderBy('price', 'asc')
                ->get();
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();

        return view('pages.allcars',compact('cars','brands','bodyTypes','fuelTypes','transmissions'));
    }

    public function sortDescending()
    {
        $cars = Car::with(['brand', 'bodytype', 'fueltype', 'transmission'])
                ->orderBy('price', 'desc')
                ->get();
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();

        return view('pages.allcars',compact('cars','brands','bodyTypes','fuelTypes','transmissions'));
    }

    public function recentlyAddedCars()
    {
        $cars = Car::with(['brand', 'bodytype', 'fueltype', 'transmission'])
                    ->where('status', 'Available')
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();
            

        return view('pages.home',compact('cars','brands','bodyTypes','fuelTypes','transmissions'));
    }


    public function showOne(Car $car)
    {
        $car = $car->load(['brand', 'bodytype', 'fueltype', 'transmission']);
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $fuelTypes = FuelType::all();
        $transmissions = Transmission::all();

        return view('pages.cardetail', compact('car','brands','bodyTypes','fuelTypes','transmissions'));
    }

}
