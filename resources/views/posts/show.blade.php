@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button onclick="goBack()">
           {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Caligula's Blog</h2>
                <h3>{{ trans('info.blog_descr') }}</h3>
            </div>
            <div class="panel-body">             
                <h1>{{ $post->title }}</h1>
                {{ $post->body }}
                <hr>
                <div class="comments">
                    <ul class="list-group">
                        @foreach ($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }}: &nbsp;
                                </strong>
                                {{ $comment->body }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class=card">
                    <div class=card-block">
                        <form method="POST" action="/posts/{{ $post->id }}/comments">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="body" placeholder="{{ trans('info.comment_here') }}" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('info.comment_add') }}</button>
                            </div>
                        </form>
                        @include ('layouts.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('layouts.sidebar')
@endsection
