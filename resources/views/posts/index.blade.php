@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h2>Caligula's Blog</h2>
                {{ trans('info.blog_descr') }} 
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <a class="btn btn-primary" href="{{ route('post.create') }}">
                        {{ trans('info.post_create') }}
                    </a>
                </div>
            </div>
            <hr>
            <div class="panel-body">
                @foreach ($posts as $post)
                    @include ('posts.post')
                @endforeach
            </div>
        </div>
    </div>   
    @include ('layouts.sidebar')
@endsection