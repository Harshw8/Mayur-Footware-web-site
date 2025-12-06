@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Brand Edit</h1>
        <div class="card col-md-6">
            <div class="card-body">
        <table class="table table-bordered mb-0">
            <tbody>
                <div class="row mt-2">
                <div class="col-md-4">
                <div>
                    <label for="name" class="form-label">Name:</label>
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
