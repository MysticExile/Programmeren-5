<!-- Extends template page -->
@extends('layouts.app')

<!-- Specify content -->
@section('content')

    <h3>Edit Champion</h3>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <!-- Alert message (start) -->
            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('message') }}
                </div>
            @endif
            <!-- Alert message (end) -->

            <div class="actionbutton">

                <a class='btn btn-info float-right' href="{{route('champions')}}">List</a>

            </div>

            <form action="{{route('champions.update',[$champion->id])}}" method="post" >
                {{csrf_field()}}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="title" class="form-control col-md-12 col-xs-12" name="title" placeholder="Enter champion name" required="required" type="text" value="{{old('title',$champion->title)}}">

                        @if ($errors->has('title'))
                            <span class="errormsg">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name='description' id='description' class='form-control' placeholder="Enter description">{{old('description',$champion->description)}}</textarea>

                        @if ($errors->has('description'))
                            <span class="errormsg">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prize">Prize
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name='prize' id='prize' class='form-control' placeholder="Enter prize">{{old('prize',$champion->prize)}}</textarea>

                        @if ($errors->has('prize'))
                            <span class="errormsg">{{ $errors->first('prize') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <input type="submit" name="submit" value='Submit' class='btn btn-success'>
                    </div>
                </div>

            </form>

        </div>
    </div>

@stop
