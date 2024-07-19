<div class="post">
    <div class="post-img">
        <a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}"><img src="images/blog-1.png" alt=""></a>
    </div>
    <div class="post-content">
        <a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}">
            <h3 class="post-title">
                {{ $post->title }}
            </h3>
        </a>
    </div>
</div>
