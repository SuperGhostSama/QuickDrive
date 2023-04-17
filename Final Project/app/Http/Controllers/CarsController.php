<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('images')) {
        
            // Upload new image
            $images = $request->file('images');
            $uploadedImages = [];
            $i = 0;
            foreach ($images as $image) {
                // Get the file extension
                $extension = strtolower($image->getClientOriginalExtension());
                
                // Check if the file extension is jpg or webp
                if ($extension == 'jpg' || $extension == 'webp') {
                    // Check if the file size is less than 150KB
                    if ($image->getSize() <= 150000) {
                        $path = $image->store('public/upload');
                        if ($path) {
                            $uploadedImages[$i] = $path;
                            $i++;
                        }
                    } else {
                        return redirect()->back()->with(['error' => 'File over 150KB']);
                    }
                } else {
                    return redirect()->back()->with(['error' => 'File type not supported']);
                }
            }
            $car->images = json_encode($uploadedImages);
        } 
    $car->save();
    return redirect()->back()->with('success', 'Car Added Successfully');
    }


    public function update(Request $request)
    {
        $car = Car::find($request->id);
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
        
        if ($request->hasFile('images')) {
            
            // Delete old image
            $oldImages = json_decode($car->images, true);
            if($oldImages){
                foreach ($oldImages as $oldImage) {
                    Storage::delete($oldImage);
                }
            }
        
            // Upload new image
            $images = $request->file('images');
            $uploadedImages = [];
            $i = 0;
            foreach ($images as $image) {
                // Get the file extension
                $extension = strtolower($image->getClientOriginalExtension());
                
                // Check if the file extension is jpg or webp
                if ($extension == 'jpg' || $extension == 'webp') {
                    // Check if the file size is less than 150KB
                    if ($image->getSize() <= 150000) {
                        $path = $image->store('public/upload');
                        if ($path) {
                            $uploadedImages[$i] = $path;
                            $i++;
                        }
                    } else {
                        return redirect()->back()->with(['error' => 'File over 150KB']);
                    }
                } else {
                    return redirect()->back()->with(['error' => 'File type not supported']);
                }
            }
            $car->images = json_encode($uploadedImages);
        } 
    $car->update();
    return redirect()->back()->with('success', 'Car Updated Successfully');
    }


    
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->back()->with('success', 'Car Deleted Successfully');
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
            
        //statistics
        $brandsCount = Brand::count();
        $carsCount = Car::count();
        $availableCarsCount = Car::where('status', 'available')->count();
        $reservedCarsCount = Car::where('status', 'reserved')->count();

        return view('pages.home',['brandsCount' => $brandsCount,'carsCount' => $carsCount,'availableCarsCount' => $availableCarsCount,'reservedCarsCount' => $reservedCarsCount,'cars' => $cars,'brands' => $brands,'bodyTypes' => $bodyTypes,'fuelTypes' => $fuelTypes,'transmissions' => $transmissions,]);
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
