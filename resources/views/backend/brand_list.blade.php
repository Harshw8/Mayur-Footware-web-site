@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Brand List</h1>
        <div class="card">
            <div class="card-header">
         <a href="{{ route('brand_create') }}" class="btn btn-primary px-5">Add New Brand</a>
            </div>
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Adidas</td>
                    <td>2025-12-06</td>
                    <td>2025-12-06</td>
                    <td>
                        <a class="btn btn-danger px-5"
                        href="{{ route('brand_edit') }}">Edit</a></br>
                        <a class="btn btn-primary px-5"
                        href="{{ route('brand_delete') }}">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nike</td>
                    <td>2025-12-06</td>
                    <td>2025-12-06</td>
                    <td>
                       <a class="btn btn-danger px-5"
                       href="{{ route('brand_edit') }}">Edit</a></br>
                       <a class="btn btn-primary px-5"
                       href="{{ route('brand_delete') }}">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
@endsection
