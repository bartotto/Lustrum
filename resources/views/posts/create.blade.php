@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button class="btn btn-primary" onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.post_create') }}</h2>
            </div>
        </div>
        <form method="POST" action="/post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">{{ trans('info.post_title') }}:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">{{ trans('info.post_body') }}:</label>
                <textarea id="body" name="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ trans('info.post_publish') }}</button>
            </div>      
            @include ('layouts.errors')
        </form>  
    </div>
    @include ('layouts.sidebar')
@endsection
