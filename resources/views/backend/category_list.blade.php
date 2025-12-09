@extends('backend.layout.master_layout')

@section('main_content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="breadcrumb-title pe-3">Category List</h1>
        <a href="{{ route('backend.category_create') }}" class="btn btn-primary px-5">Add New Category</a>
    </div>

    <div class="card">
        <div class="card-body p-0">
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
                        <td>Harsh</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5 mb-1" href="{{ route('backend.category_edit') }}">Edit</a>
                            <a class="btn btn-danger px-5" href="{{ route('backend.category_delete') }}">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dhruv</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5 mb-1" href="{{ route('backend.category_edit') }}">Edit</a>
                            <a class="btn btn-danger px-5" href="{{ route('backend.category_delete') }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
