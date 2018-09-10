@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9"> 
                <div class="card-header">
                    {{ trans('info.post_blog') }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ trans('info.comment_your') }}</p>
                    <p class="blog-post-title">{{ $comment->title }}</p>
                    <p class="blog-post-meta">{{ $comment->user->first_name }}, {{ $comment->created_at->diffForHumans() }}</p>
                    <p>{{ $comment->body }}</p>
                    @if(Auth::id() == $comment->user_id)
                        <div class="entire-thing">
                            <div class="ad-left">
                                <button class="btn btn-primary" onclick="goBack()">{{ trans('info.back') }}</button>&nbsp;
                                <a class="btn btn-primary" href="{{ route('comments.edit', $comment->id) }}">{{ trans('info.edit') }}</a>&nbsp;&nbsp;
                            </div>
                            <div class="ad-left">
                                <form class="delete" action="{{ route('comments.destroy', $comment->id)}}" method="post">
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
