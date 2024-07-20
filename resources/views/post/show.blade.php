@extends('layouts.default', ['title' => $post->title])

@section('content')
<div class="wrapper">
    <div class="section-post-detail">
        <div class="post-detail-img">
            <img src="images/blog-2.png" alt="post-detail-image">
        </div>

        <h1>{{ $post->title }}</h1>

        <p class="small">
            @if ($post->category)
                Catégorie : <span class="badge bg-primary">{{ $post->category?->name }}</span>
            @endif
        </p>
        <p class="small">
            @if (!$post->tags->isEmpty())
                Tags :
                @foreach ($post->tags as $tag)
                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                @endforeach
            @endif
        </p>
        <p>
            {!! nl2br($post->description) !!}
        </p>

    </div>
</div>
@endsection
