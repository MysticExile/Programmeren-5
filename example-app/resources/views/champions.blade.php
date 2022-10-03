@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Panel</h2>
        <p>Data of the Registered Users.</p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($champions as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
