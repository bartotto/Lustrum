@extends('layouts.app')
@section('subtitle', '| '.trans('info.post_create'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="card">
                    <div class="card-header">{{ trans('info.post_blog') }}</div>
                    <div class="card-body">
                        <div class="card-title">{{ trans('info.post_create') }}:</div>
                        @include ('layouts.errors')
                        <form method="post" action="{{ route('posts.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="title">{{ trans('info.post_title') }}:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="body">{{ trans('info.post_body') }}:</label>
                                <textarea class="form-control" id="body" name="body" required></textarea>
                            </div>
                            <button class="btn btn-primary" onclick="goBack()">{{ trans('info.cancel') }}</button>
                            <button type="submit" class="btn btn-primary">{{ trans('info.post_publish') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card">
                    <div class="card-header">
                        {{ trans('info.blog_descr') }}
                    </div>
                    <div class="card-body">   
                        @include ('layouts.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
