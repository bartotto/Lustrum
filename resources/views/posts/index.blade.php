@extends('layouts.app')
@section('subtitle', '| '.trans('info.blog'))
@section('content')
   <div class="container-fluid">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="card-header">{{ trans('info.post_blog') }}</div>
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">{{ trans('info.post_create') }}</a>
                    ({{ trans('info.post_descr') }})<br><br>
                    @foreach ($posts as $post)
                        @include ('posts.post')
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card-header">
                    {{ trans('info.blog_descr') }}
                </div>
                <div class="card-body">   
                    @include ('layouts.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection