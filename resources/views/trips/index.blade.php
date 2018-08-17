@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h2>Caligula's Trips</h2>
            </div>
            <div class="form-group">
                <div class="col-md-8">
             
                </div>
            </div>
            <hr>
            <div class="panel-body">
                <select class="form-control select2-multi" name="users[]" multiple="multiple">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>   
    @include ('layouts.sidebar')
@endsection