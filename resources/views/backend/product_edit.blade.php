@extends('backend.layout.master_layout')

@section('main_content')
<h1>Product Edit</h1>

<div class="card col-md-8">
    <div class="card-body">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Select Category</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="brand_id" class="form-label">Brand:</label>
                    <select name="brand_id" id="brand_id" class="form-select">
                        <option value="">Select Brand</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
    <div class="col-md-6">
        <label for="size" class="form-label">Size:</label>
        <select name="size" id="size" class="form-select">
            <option value="">Select Size</option>
            <option value="S">Small (S)</option>
            <option value="M">Medium (M)</option>
            <option value="L">Large (L)</option>
            <option value="XL">Extra Large (XL)</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="stock" class="form-label">Stock Quantity:</label>
        <input type="number" name="stock" id="stock" class="form-control" placeholder="Enter Stock Quantity">
    </div>
</div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" name="color" id="color" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="original_price" class="form-label">Original Price:</label>
                    <input type="text" name="original_price" id="original_price" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="discount_price" class="form-label">Discount Price:</label>
                    <input type="text" name="discount_price" id="discount_price" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
