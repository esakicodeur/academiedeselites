@extends('admin.admin')

@section('title', $policy->exists ? "Editer une policy" : "Créer une policy")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($policy->exists ? 'admin.policy.update' : 'admin.policy.store', $policy) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($policy->exists ? 'put' : 'post')

        {{-- @include('shared.input', ['type' => 'textarea', 'label' => 'Description', 'name' => 'description', 'value' => $policy->description]) --}}

        <p class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="myeditorinstance" class="form-control tinymce @error('description') is-invalid @enderror" name="description">{{ $policy->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </p>

        <p>
            <button class="btn btn-primary">
                @if ($policy->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
