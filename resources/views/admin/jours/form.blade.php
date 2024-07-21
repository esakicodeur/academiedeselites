@extends('admin.admin')

@section('title', $jour->exists ? "Editer un jour" : "Créer un jour")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($jour->exists ? 'admin.jour.update' : 'admin.jour.store', $jour) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($jour->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $jour->name])

        <p>
            <button class="btn btn-primary">
                @if ($jour->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
