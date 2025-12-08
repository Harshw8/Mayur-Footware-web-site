@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Category List</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('category_create') }}" class="btn btn-primary px-5">Add New Category</a>
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
                        <td>Harsh</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5" href="{{ route('category_edit') }}">Edit</a></br>
                            <a class="btn btn-danger px-5" href="{{ route('category_delete') }}">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dhruv</td>
                        <td>2025-12-06</td>
                        <td>2025-12-06</td>
                        <td>
                            <a class="btn btn-primary px-5" href="{{ route('category_edit') }}">Edit</a></br>
                            <a class="btn btn-danger px-5" href="{{ route('category_delete') }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
