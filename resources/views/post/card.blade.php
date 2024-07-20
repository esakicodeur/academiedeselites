<div class="post">
    <div class="post-img">
        <a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}">
            <img src="{{ $post->imageUrl() }}" alt="image" class="w-100 object-fit-cover rounded-4" style="max-height: 15rem;">
        </a>
    </div>

    <div class="post-content">
        <div class="d-flex justify-content-between">
            <div class="small">
                @if ($post->category)
                    <a href="{{ route('by-category', ['slug' => $post->category->getSlug(), 'category' => $post->category]) }}" class="badge bg-primary text-light">{{ $post->category?->name }}</a>
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
