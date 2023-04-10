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

        return redirect()->back()->with('success', 'Brand Added Successfully');
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

        return redirect()->back()->with('success', 'Brand Updated Successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        // return response()->json(['message' => 'Brand deleted successfully.'], 200);
        return redirect()->back()->with('success', 'Brand Deleted Successfully');
    }
}
