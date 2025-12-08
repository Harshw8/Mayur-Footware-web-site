@extends('backend.layout.master_layout')

@section('main_content')
<h1>Profile Edit</h1>

<div class="card col-md-8">
    <div class="card-body">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="col-md-6"></div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <label for="address" class="form-label">Description:</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2 text-end">
                    <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
