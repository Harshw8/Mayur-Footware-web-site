@extends('backend.layout.master_layout')

@section('main_content')
    <h1 class="breadcrumb-title pe-3 mb-3">Category List</h1>

    <div class="card">
        <div class="card-body p-0">
            <div class="d-flex justify-content-end p-3">
                <a href="{{ route('backend.category_create') }}" class="btn btn-primary px-5">
                    Add New Category
                </a>
            </div>
           @if(session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif

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
                    @if ($categories->isEmpty())
                    <tr>
                        <td colspan="4">No categories found</td>
                </tr>
            @endif
        @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('backend.category_edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('backend.category_delete', $category->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
