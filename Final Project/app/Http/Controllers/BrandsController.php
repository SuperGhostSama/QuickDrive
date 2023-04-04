<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('pages.dashboard-brands',compact('brands'));
    }

    public function store(Request $request)
    {
        Brand::create($request->all());

        return $this->index();
    }

    public function show(Brand $brand)
    {
        return response()->json([
            "id" => $brand->id,
            "name" => $brand->name
        ]);
    }

    public function update(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->update($request->all());

        return $this->index();
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        // return response()->json(['message' => 'Brand deleted successfully.'], 200);
        return $this->index();
    }
}
