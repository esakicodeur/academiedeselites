@extends('layouts.default', ['title' => 'Blog'])

@section('content')
<div class="wrapper">
    <div class="section-blog">
        <div class="bg-light p-5 mb-5 text-center">
            <form action="" method="GET" class="container d-flex gap-2">
                <p class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" name="title" placeholder="Recherche..." value="{{ $input['title'] ?? '' }}">
                    <button class="btn btn-primary btn-sm flex-grow-0">
                        Rechercher
                    </button>
                </p>

            </form>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="bg-light p-5 mb-5">
                    <h2>Catégories</h2>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <a href="{{ route('by-category', ['slug' => $category->getSlug(), 'category' => $category]) }}" class="text-decoration-none fw-bold"><li class="list-group-item">{{ $category->name }}</li></a>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="posts">
                    @forelse ($posts as $post)
                        @include('post.card')
                    @empty
                        <h2 class="bg-light p-5 mb-5 text-center">
                            Aucun article ne correspond à cette recherche.
                        </h2>
                    @endforelse
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

@include('layouts.partials._livrets')

@include('layouts.partials._faq')
@endsection
