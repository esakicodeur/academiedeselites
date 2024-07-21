@extends('admin.admin')

@section('title', $matiere->exists ? "Editer une matiere" : "Créer une matiere")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($matiere->exists ? 'admin.matiere.update' : 'admin.matiere.store', $matiere) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($matiere->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $matiere->name])

        <p>
            <button class="btn btn-primary">
                @if ($matiere->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
