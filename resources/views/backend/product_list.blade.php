@extends('backend.layout.master_layout')

@section('main_content')
    <h1 class="breadcrumb-title pe-3 mb-3">Product List</h1>

    <div class="card">
        <div class="card-body p-0">
            <div class="d-flex justify-content-end p-3">
                <a href="{{ route('backend.product_create') }}" class="btn btn-primary px-5">
                    Add New Product
                </a>
            </div>

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
                        <th>Color</th>
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
                        <td>Shoes</td>
                        <td></td>
                        <td>7</td>
                        <td>100</td>
                        <td>White</td>
                        <td>1000</td>
                        <td>500</td>
                        <td>Good Quality</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-4 mb-1" href="{{ route('backend.product_edit') }}">Edit</a>
                            <a class="btn btn-danger px-4" href="{{ route('backend.product_delete') }}">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Dhruv</td>
                        <td>Nike</td>
                        <td>Loafer</td>
                        <td></td>
                        <td>6</td>
                        <td>170</td>
                        <td>White</td>
                        <td>1000</td>
                        <td>500</td>
                        <td>Good Quality</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-4 mb-1" href="{{ route('backend.product_edit') }}">Edit</a>
                            <a class="btn btn-danger px-4" href="{{ route('backend.product_delete') }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

@endsection
