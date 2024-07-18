@extends('admin.admin')

@section('title', $post->exists ? "Editer un article" : "Créer un article")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($post->exists ? 'admin.post.update' : 'admin.post.store', $post) }}" method="POST">

        @csrf
        @method($post->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $post->title])

        @include('shared.input', ['type' => 'textarea', 'label' => 'Description', 'name' => 'description', 'value' => $post->description])

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
