<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.category_list', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category_edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        session()->flash('success', 'Category updated successfully');
        return redirect()->route('backend.category_list');
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.category_create', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
        'name' => $request->name,
       ]);
       session()->flash('success', 'Category created successfully');
       return redirect()->route('backend.category_list');
    }

    public function delete($id)
    {
        $category = category::where('id', $id)->first();
        if($category){  
            $category->delete();
            session()->flash('success', 'Category deleted successfully');
        return redirect()->route('backend.category_list');
        }
    }
}
