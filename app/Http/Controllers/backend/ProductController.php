<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.product_list');
    }

    public function create()
    {
        return view('backend.product_create');
    }

    public function edit()
    {
        return view('backend.product_edit');
    }

    public function delete()
    {
        return redirect()->route('product_list');
    }
}
