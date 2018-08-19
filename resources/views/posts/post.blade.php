<div class="blog-post">
    <p class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </p>
    <p class="blog-post-meta">
        <h6>{{ $post->user->first_name }},
        {{ $post->created_at->diffForHumans() }}</h6>
    </p>
    {{ $post->body }}
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                @include ('comments.comment')
            @endforeach
        </ul>  
    </div>
</div>
