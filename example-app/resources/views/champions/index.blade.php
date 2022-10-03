<!-- Extends template page-->
@extends('layouts.app')

<!-- Specify content -->
@section('content')

    <h3>Champions List</h3>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Alert message (start) -->
            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('message') }}
                </div>
            @endif
            <!-- Alert message (end) -->

            <div class='actionbutton'>

                <a class='btn btn-info float-right' href="{{route('champions.create')}}">Add</a>

            </div>
            <table class="table" >
                <thead>
                <tr>
                    <th width='40%'>Title</th>
                    <th width='40%'>Description</th>
                    <th width='40%'>Prize</th>
                    <th width='20%'>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($champions as $champion)
                    <tr>
                        <td>{{ $champion->title }}</td>
                        <td>{{ $champion->description }}</td>
                        <td>{{ $champion->prize }}</td>
                        <td>
                            <!-- Edit -->
                            <a href="{{ route('champions.edit',[$champion->id]) }}" class="btn btn-sm btn-info">Edit</a>
                            <!-- Delete -->
                            <a href="{{ route('champions.delete',$champion->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop
