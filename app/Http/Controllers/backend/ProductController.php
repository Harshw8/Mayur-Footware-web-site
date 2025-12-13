<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.product_list', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('backend.product_create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        Product::create([
            'category_id'    => $request->category_id,
            'brand_id'       => $request->brand_id,
            'name'           => $request->name,
            'image'          => Storage::disk('public')->putFile('images', $request->image),
            'size'           => $request->size,
            'stock'          => $request->stock,
            'color'          => $request->color,
            'original_price' => $request->original_price,
            'discount_price' => $request->discount_price,
            'description'    => $request->description,
        ]);
        return redirect()->route('backend.product_list')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('backend.product_edit', compact('product', 'brands', 'categories'));
    }

    public function update(Request $request, $id)
   {
    $product = Product::find($id);
     $product->category_id    = $request->category_id;
    $product->brand_id       = $request->brand_id;
    $product->name           = $request->name;
    if($request->image){
            $product->image = Storage::disk('public')->delete('images', $request->image);
            $newImage = $request->file('image')->store('images', 'public');
            $product->image = $newImage;
        }
    $product->size           = $request->size;
    $product->stock          = $request->stock;
    $product->color          = $request->color;
    $product->original_price = $request->original_price;
    $product->discount_price = $request->discount_price;
    $product->description    = $request->description;

    $product->save();
    session()->flash('success', 'Product updated successfully');
    return redirect()->route('backend.product_list');
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->first();
        if($product){  
            $product->delete();
            session()->flash('success', 'Product deleted successfully');
        return redirect()->route('backend.product_list');
        }
    }
}
