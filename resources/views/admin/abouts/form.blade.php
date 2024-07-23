@extends('admin.admin')

@section('title', $about->exists ? "Editer une about" : "Créer une about")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($about->exists ? 'admin.about.update' : 'admin.about.store', $about) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($about->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $about->title])

        <p class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="myeditorinstance" class="form-control tinymce @error('description') is-invalid @enderror" name="description">{{ $about->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        <p>
            <button class="btn btn-primary">
                @if ($about->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
