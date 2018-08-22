@extends('layouts.app')
@section('subtitle', '| '.trans('info.blog'))
@section('content')
   <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>Caligula's Blog</h2>
                        <a class="btn btn-primary" href="{{ route('post.create') }}">
                            {{ trans('info.post_create') }}</a>
                        <h7>of klik op een titel van een bestaande bijdrage om commentaar te leveren.</h7>
                    </div>
                    <div class="card-body">
                        @foreach ($posts as $post)
                            @include ('posts.post')
                        @endforeach
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