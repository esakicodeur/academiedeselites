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
        <div class="d-flex justify-content-between mx-3">
            @guest
                <div>
                    {{ $post->favorite_to_users->count() }}
                    <a href="javascript:void(0);" onclick="alert('Pour liker, vous devez d\'abord vous connecter.')">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
            @else
                <div>
                    {{ $post->favorite_to_users->count() }}
                    <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();" class="{{ !Auth::user()->favorite_posts->where('pivot.post_id', $post->id)->count() == 0 ? 'text-danger' : '' }}">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>

                <form action="{{ route('post.favorite', $post->id) }}" id="favorite-form-{{ $post->id }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest

            <div><a href="{{ route('blog.show', ['slug' => $post->getSlug(), 'post' => $post]) }}">{{ $post->comments()->count() }} <i class="fas fa-comment"></i></a></div>
        </div>
    </div>
</div>
