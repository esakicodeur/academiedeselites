<div class="post">
    <div class="post-img">
        <a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}"><img src="images/blog-1.png" alt=""></a>
    </div>

    <div class="post-content">
        <div class="d-flex justify-content-between">
            <div class="small">
                @if ($post->category)
                    <a href="#" class="badge bg-primary text-light">{{ $post->category?->name }}</a>
                @endif
            </div>
            <div class="pl-3">{{ $post->getFormattedDate() }}</div>
        </div>
        <a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}">
            <h4 class="post-title">
                {{ $post->shortTitle() }}
            </h4>
        </a>
        <a href="#">
            {{ $post->shortBody() }}
        </a>
    </div>
</div>
