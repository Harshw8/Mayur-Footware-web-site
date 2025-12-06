@extends('backend.layout.master_layout')

@section('main_content')
        <h1>Category Edit</h1>
        <table border="1">
            <tbody>
                <a href="{{ route('category_list') }}">Back</a>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <button type="submit">Submit</button>
                </div>
            </tbody>
        </table>
@endsection
