@extends('layouts.default', ['title' => $post->title])

@section('content')
<div class="wrapper">
    <div class="section-post-detail">
        <div class="post-detail-img">
            <img src="{{ asset('images/blog-2.png') }}" alt="post-detail-image">
        </div>

        <h1>{{ $post->title }}</h1>

        <div class="pl-3">{{ $post->getFormattedDate() }}</div>

        <p class="small">
            @if ($post->category)
                Catégorie : <a href="{{ route('by-category', ['slug' => $post->category->getSlug(), 'category' => $post->category]) }}" class="badge bg-primary text-light">{{ $post->category?->name }}</a>
            @endif
        </p>
        <p class="small">
            @if (!$post->tags->isEmpty())
                Tags :
                @foreach ($post->tags as $tag)
                    <a href="{{ route('by-tag', ['slug' => $tag->getSlug(), 'tag' => $tag]) }}" class="badge bg-secondary text-light">{{ $tag->name }}</a>
                @endforeach
            @endif
        </p>
        <p>
            {!! nl2br($post->description) !!}
        </p>

    </div>
</div>
@endsection
