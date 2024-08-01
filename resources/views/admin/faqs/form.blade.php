@extends('admin.admin')

@section('title', $faq->exists ? "Editer une faq" : "Créer une faq")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($faq->exists ? 'admin.faq.update' : 'admin.faq.store', $faq) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($faq->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $faq->title])

        <p class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="myeditorinstance" class="form-control tinymce @error('description') is-invalid @enderror" name="description">{{ $faq->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        <p>
            <button class="btn btn-primary">
                @if ($faq->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
