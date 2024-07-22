@extends('layouts.default', ['title' => $post->title])

@section('content')
<div class="wrapper">
    <div class="section-post-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-detail-img">
                        <img src="{{ $post->imageUrl() }}" alt="post-detail-image" class="img-fluid">
                    </div>

                    <h2>{{ $post->title }}</h2>

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

                    <div class="w-100">
                        <h3>{{ $post->comments()->count() }} Commentaire(s)</h3>

                        @guest
                            <h5 class="bg-light py-3 px-5 mb-5">
                                Pour poster un commentaire. Vous devez d'abord vous connecter.
                                <a href="{{ route('login') }}">Se connecter</a>
                            </h5>
                        @else
                            <form action="{{ route('comment.store', $post->id) }}" method="POST" class="bg-light py-4 px-5 mb-5">
                                @csrf

                                <p>
                                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" placeholder="Entrez votre commentaire..." >{{ old('comment') }}</textarea>
                                    {!! $errors->first('comment', '<span class="invalid-feedback">:message</span>') !!}
                                </p>

                                <button class="btn btn-primary btn-block my-3" type="submit">Commenter</button>
                            </form>
                        @endguest

                        @if ($post->comments->count() > 0)
                            <div class="bg-light py-4 px-3 mb-5">
                                @foreach ($post->comments as $comment)
                                    <div class="row my-3">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ $post->imageUrl() }}" class="rounded-5" alt="..." style="width: 50px; height: 50px;">
                                            </div>

                                            <div class="row">
                                                <div class="d-flex align-items-center justify-content-between mx-3">
                                                    <p class="fw-bold">
                                                        {{ $comment->user->name }}
                                                    </p>
                                                    <p class="mx-3">
                                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                    </p>
                                                </div>
                                                <p class="card-text mx-3">
                                                    {{ $comment->comment }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h5 class="bg-light py-4 px-3 mb-5">Aucun commentaire pour l'instant. Soyez le premier :)</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
