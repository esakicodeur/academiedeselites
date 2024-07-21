@extends('admin.admin')

@section('title', $information->exists ? "Editer une information" : "Créer une information")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($information->exists ? 'admin.information.update' : 'admin.information.store', $information) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($information->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $information->name])

        <p>
            <button class="btn btn-primary">
                @if ($information->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
