@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    A Form for Adding Data
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')
    {{-- Page Content --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="post" action="/form" id="addplayer">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="column1" class="col-sm-2 control-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="column1" name="column1" placeholder="Name">
                        </div>
                    </div>
                    @if($errors->first('column1'))
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class='error'>{{ $errors->first('column1') }}</div>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="column2" class="col-sm-2 control-label">Number:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="column2" name="column2" placeholder="Number">
                        </div>
                    </div>
                    @if($errors->first('column2'))
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class='error'>{{ $errors->first('column2') }}</div>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('body')
    {{-- Page Specific JS --}}
@stop
