@extends('backend.layout.master_layout')

@section('main_content')
    <h1 class="breadcrumb-title pe-3">Category Create</h1>

    <div class="card col-md-6">
        <div class="card-body">

            <form action="{{ route('backend.category_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-end">
                    <div class="col-md-8">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
