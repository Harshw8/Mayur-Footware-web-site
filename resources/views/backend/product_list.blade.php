@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Product List</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('product_create') }}" class="btn btn-primary px-5">Add New Product</a>
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Size</th>
                        <th>Stock</th>
                        <th>color</th>
                        <th>Original Price</th>
                        <th>Discount Price</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Harsh</td>
                        <td>Adidas</td>
                        <td>Shoes
                        <td>
                        <td>7</td>
                        <td>100</td>
                        <td>white</td>
                        <td>1000</td>
                        <td>500</td>
                        <td>Good Quality</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5" href="{{ route('product_edit') }}">Edit</a></br>
                            <a class="btn btn-danger px-5" href="{{ route('product_delete') }}">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dhruv</td>
                        <td>Nike</td>
                        <td>Loffer
                        <td>
                        <td>6</td>
                        <td>170</td>
                        <td>white</td>
                        <td>1000</td>
                        <td>500</td>
                        <td>Good Quality</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5" href="{{ route('product_edit') }}">Edit</a></br>
                            <a class="btn btn-danger px-5" href="{{ route('product_delete') }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
