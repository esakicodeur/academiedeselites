@extends('admin.admin')

@section('title', $niveau->exists ? "Editer un niveau" : "Créer un niveau")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($niveau->exists ? 'admin.niveau.update' : 'admin.niveau.store', $niveau) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($niveau->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $niveau->name])

        <p>
            <button class="btn btn-primary">
                @if ($niveau->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
