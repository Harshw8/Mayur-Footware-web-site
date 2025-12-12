<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand_list', compact('brands'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('backend.brand_create', compact('brands'));
    }

    public function store(Request $request)
    {
        Brand::create([
        'name' => $request->name,
       ]);
       session()->flash('success', 'Brand created successfully');
       return redirect()->route('backend.brand_list');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand_edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->save();
        session()->flash('success', 'Brand updated successfully');
        return redirect()->route('backend.brand_list');
    }

    public function delete($id)
    {
        $brand = Brand::where('id', $id)->first();
        if($brand){  
            $brand->delete();
            session()->flash('success', 'Brand deleted successfully');
        return redirect()->route('backend.brand_list');
        }
    }
}
