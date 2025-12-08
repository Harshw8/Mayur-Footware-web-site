@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Product Edit</h1>
    <div class="card col-md-6">
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tbody>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="category_id">Category:</label>
                                <select name="category_id" id="category_id">
                                    <option value="">Select Category</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="brand_id">Brand:</label>
                                <select name="brand_id" id="brand_id">
                                    <option value="">Select Brand</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div>
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="size" class="form-label">Size:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="stock" class="form-label">Stock:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="color" class="form-label">Color:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="original_price" class="form-label">Original Price:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="discount_price" class="form-label">Discount Price:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div>
                                <label for="description" class="form-label">Description:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div>
                                <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection
