@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Edit Player
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')
    {{-- Page Content --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(isset($players))
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="player" class="col-sm-2 control-label">Select Player:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="player" id="player">
                                    @foreach($players as $player)
                                        <option value={{$player->id}}>{{"#".$player->column2." - ".$player->column1}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="editbtn">Select Player</button>
                            </div>
                        </div>
                    </form>
                @else
                    <form class="form-horizontal" method="post" action="/editdata" id="editplayer">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="column1" class="col-sm-2 control-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="column1" name="column1" value={{old('column1')?old('column1'):$player->column1}}>
                                @if ($errors->has('column1'))
                                    <span class="help-block example_alert">
                                    <strong>{{$errors->first('column1')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="column2" class="col-sm-2 control-label">Number:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="column2" name="column2" value={{old('column2')?old('column2'):$player->column2}}>
                                @if ($errors->has('column2'))
                                    <span class="help-block example_alert">
                                    <strong>{{$errors->first('column2')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" id="id" name="id" value={{$player->id}}>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@stop

@section('body')
    {{-- Page Specific JS --}}
    <script src="/js/editdata.js" type="text/javascript"></script>
@stop