<div class="blog-comment">
    <p class="blog-comment-title">
        {{ $comment['title'] }}
    </p>
    <p class="blog-comment-meta">
        {{ $comment['user']->first_name }},
        {{ $comment['created_at']->diffForHumans() }}
    </p>
    {{ $comment->body }}
</div>