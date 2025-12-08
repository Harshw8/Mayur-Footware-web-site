@extends('backend.layout.master_layout')

@section('main_content')
<h1>Password Update</h1>

<div class="card col-md-6">
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="new_password" class="form-label">New Password:</label>
                    <input type="password" name="new_password" id="new_password" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <label for="confirm_password" class="form-label">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-grd-primary px-4">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
