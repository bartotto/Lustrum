@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9"> 
                <div class="card-header">
                    {{ trans('info.post_blog') }}
                </div>
                <div class="card-body">
                    <p class="blog-post-title">{{ $post->title }}</p>
                    <p class="blog-post-meta">{{ $post->user->first_name }}, {{ $post->created_at->diffForHumans() }}</p>
                    <p>{{ $post->body }}</p>
                    @if(Auth::id() == $post->user_id)
                        <div class="entire-thing">
                            <div class="ad-left">
                                <button class="btn btn-primary" onclick="goBack()">{{ trans('info.back') }}</button>&nbsp;
                                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">{{ trans('info.edit') }}</a>&nbsp;&nbsp;
                            </div>
                            <div class="ad-left">
                                <form class="delete" action="{{ route('posts.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-warning" type="submit" value="{{ trans('info.delete') }}">
                                </form>
                            </div>
                            <div class="clear"></div>
                        </div>
                    @else
                        <button class="btn btn-primary" onclick="goBack()">{{ trans('info.back') }}</button>
                    @endif
                    <br>
                    <hr>
                    <div class="comments">
                        @foreach ($post->comments as $comment)
                            @include ('comments.comment')
                        @endforeach
                    </div>
                    <hr>
                    <div class="card">
                        @include ('layouts.errors')
                        <form class="form-comment" method="POST" action="/posts/{{ $post->id }}/comment">
                            {{ csrf_field() }}        
                            <div class="form-group">
                                <label for="title">{{ trans('info.post_title') }}:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="{{ trans('info.title_here') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="body">{{ trans('info.post_body') }}:</label>
                                <textarea class="form-control" id="body" name="body" placeholder="{{ trans('info.comment_here') }}" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('info.comment_add') }}</button>
                            </div>
                        </form>
                    </div>
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
