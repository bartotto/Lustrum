@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>{{ trans('info.post_create') }}</h2>
                        <button class="btn btn-primary" onclick="goBack()">
                            {{ trans('info.back') }}
                        </button>
                    </div>
                    <div class="card-body">
                        @include ('layouts.errors')
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
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-block">
                    <div class="card-header">
                        <h4>{{ trans('info.blog_descr') }}</h4>
                    </div>
                    <div class="card-body">   
                        @include ('layouts.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
