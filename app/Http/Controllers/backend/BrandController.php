<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return view('backend.brand_list');
    }

    public function create()
    {
        return view('backend.brand_create');
    }

    public function edit()
    {
        return view('backend.brand_edit');
    }

    public function delete()
    {
        return redirect()->route('brand_list');
    }
}
