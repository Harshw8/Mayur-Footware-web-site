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

            @if(session()->has('success'))
            <p>{{ session()->get('success') }}</p>
        @endif

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
                    @if($products->isEmpty())
                        <tr>
                            <td colspan="14" class="text-center">No products found</td>
                        </tr>
                    @endif

                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->category->name ?? '-' }}</td>
                            <td>{{ $product->brand->name ?? '-' }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $product->image) }}" height="50">
                            </td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->original_price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>

                            <td>
                                <a href="{{ route('backend.product_edit', $product->id) }}" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('backend.product_delete', $product->id) }}" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
