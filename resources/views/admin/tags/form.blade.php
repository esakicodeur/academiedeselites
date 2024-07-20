@extends('admin.admin')

@section('title', $tag->exists ? "Editer un tag" : "Créer un tag")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($tag->exists ? 'admin.tag.update' : 'admin.tag.store', $tag) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($tag->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $tag->name])

        <p>
            <button class="btn btn-primary">
                @if ($tag->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
