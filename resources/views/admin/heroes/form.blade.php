@extends('admin.admin')

@section('title', $hero->exists ? "Editer une hero" : "Créer une hero")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($hero->exists ? 'admin.hero.update' : 'admin.hero.store', $hero) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($hero->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $hero->title])

        <p class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="myeditorinstance" class="form-control tinymce @error('description') is-invalid @enderror" name="description">{{ $hero->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        <p>
            <button class="btn btn-primary">
                @if ($hero->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
