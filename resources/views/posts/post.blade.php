<div class="blog-post">
    <p class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </p>
    <p class="blog-post-meta">
        <h6>{{ $post->user->name }},
        {{ $post->created_at->diffForHumans() }}</h6>
    </p>
    {{ $post->body }}
</div>
