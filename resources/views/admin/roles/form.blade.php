@extends('admin.admin')

@section('title', $role->exists ? "Editer un role" : "Créer un role")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($role->exists ? 'admin.role.update' : 'admin.role.store', $role) }}" method="POST" class="bg-light py-5 px-5">

        @csrf
        @method($role->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $role->name])

        <p>
            <button class="btn btn-primary">
                @if ($role->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
