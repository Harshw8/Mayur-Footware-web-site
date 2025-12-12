@extends('backend.layout.master_layout')

@section('main_content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="breadcrumb-title pe-3">Brand List</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="d-flex justify-content-end p-3">
                <a href="{{ route('backend.brand_create') }}" class="btn btn-primary px-5">Add New Brand</a>
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
                    @if ($brands->isEmpty())
                    <tr>
                        <td colspan="4">No brands found</td>
                </tr>
            @endif
                    @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->created_at }}</td>
                        <td>{{ $brand->updated_at }}</td>
                        <td>
                            <a href="{{ route('backend.brand_edit', $brand->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('backend.brand_delete', $brand->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
