@extends('admin.admin')

@section('title', $category->exists ? "Editer une categorie" : "Créer une categorie")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($category->exists ? 'admin.category.update' : 'admin.category.store', $category) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($category->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $category->name])

        <p>
            <button class="btn btn-primary">
                @if ($category->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
