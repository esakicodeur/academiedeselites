@extends('layouts.default', ['title' => $post->title])

@section('content')
<div class="wrapper">
    <div class="section-post-detail">
        <div class="post-detail-img">
            <img src="images/blog-2.png" alt="post-detail-image">
        </div>

        <h1>{{ $post->title }}</h1>

        @foreach ($post->tags as $tag)
            <span class="badge bg-primary">{{ $tag->name }}</span>
        @endforeach

        <p>
            {!! nl2br($post->description) !!}
        </p>

    </div>
</div>
@endsection
