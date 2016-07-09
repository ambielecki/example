@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Display Some Data
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')
    {{-- Page Content --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $player)
                            <tr>
                                <td>{{$player->column1}}</td>
                                <td>{{$player->column2}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="/editdata">Edit a player</a>
            </div>
        </div>
    </div>
@stop

@section('body')
    {{-- Page Specific JS --}}
@stop
