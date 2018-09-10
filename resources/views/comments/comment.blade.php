<div class="blog-comment">
    <p class="blog-comment-title">
        <a href="/comments/{{ $comment->id }}">
            {{ $comment['title'] }}
        </a>
    </p>
    <p class="blog-comment-meta">
        {{ $comment['user']->first_name }},
        {{ $comment['created_at']->diffForHumans() }}
    </p>
    {{ $comment->body }}
</div>