@extends('backend.layout.master_layout')

@section('main_content')
<h1 class="breadcrumb-title pe-3">Product Edit</h1>

<div class="card col-md-8">
    <div class="card-body">

        <form action="{{ route('backend.product_update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="brand_id" class="form-label">Brand:</label>
                    <select name="brand_id" id="brand_id" class="form-select">
                        <option value="">Select Brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}"
                                {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $product->name }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">

                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             width="80">
                    @endif
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="size" class="form-label">Size:</label>
                    <select name="size" id="size" class="form-select">
                        <option value="">Select Size</option>
                        <option value="S" {{ $product->size == 'S' ? 'selected' : '' }}>Small (S)</option>
                        <option value="M" {{ $product->size == 'M' ? 'selected' : '' }}>Medium (M)</option>
                        <option value="L" {{ $product->size == 'L' ? 'selected' : '' }}>Large (L)</option>
                        <option value="XL" {{ $product->size == 'XL' ? 'selected' : '' }}>Extra Large (XL)</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="stock" class="form-label">Stock Quantity:</label>
                    <input type="number" name="stock" id="stock" class="form-control"
                        value="{{ $product->stock }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" name="color" id="color" class="form-control"
                        value="{{ $product->color }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="original_price" class="form-label">Original Price:</label>
                    <input type="text" name="original_price" id="original_price"
                        class="form-control" value="{{ $product->original_price }}">
                </div>

                <div class="col-md-6">
                    <label for="discount_price" class="form-label">Discount Price:</label>
                    <input type="text" name="discount_price" id="discount_price"
                        class="form-control" value="{{ $product->discount_price }}">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary px-5 mb-1">Update</button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
