<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category_list');
    }

    public function edit()
    {
        return view('backend.category_edit');
    }

    public function create()
    {
        return view('backend.category_create');
    }

    public function dekete()
    {
        return redirect()->route('category_list');
    }
}
