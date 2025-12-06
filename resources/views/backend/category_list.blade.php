@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Category List</h1>
         <a href="{{ route('category_create') }}">Add New Category</a>
        <table border="1">
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
                        <a href="{{ route('category_edit') }}">Edit</a></br>
                        <a href="{{ route('category_delete') }}">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dhruv</td>
                    <td>2025-12-06</td>
                    <td>2025-12-06</td>
                    <td>
                       <a href="{{ route('category_edit') }}">Edit</a></br>
                       <a href="{{ route('category_delete') }}">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
@endsection
