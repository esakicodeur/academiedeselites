@extends('admin.admin')

@section('title', $post->exists ? "Editer un article" : "Créer un article")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($post->exists ? 'admin.post.update' : 'admin.post.store', $post) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($post->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $post->title])

        @include('shared.input', ['type' => 'textarea', 'label' => 'Description', 'name' => 'description', 'value' => $post->description])

        <p class="input-group">
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
            <label class="input-group-text" for="image">Upload</label>
            @error('image')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        <p class="form-group">
            <label for="category" class="form-label">Catégorie</label>
            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category">
                <option value="">Sélectionner une catégorie</option>
                @foreach ($categories as $category)
                    <option @selected(old('category_id', $post->category_id) == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        @include('shared.select', ['label' => 'Tags', 'name' => 'tags', 'value' => $post->tags()->pluck('id'), 'multiple' => true, 'tags' => $tags])

        @include('shared.checkbox', ['label' => 'Active', 'name' => 'active', 'value' => $post->active])

        <p>
            <button class="btn btn-primary">
                @if ($post->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
