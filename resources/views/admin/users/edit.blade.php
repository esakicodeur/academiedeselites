@extends('admin.admin')

@section('title', $user->exists ? "Editer un utilisateur" : "Créer un utilisateur")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($user->exists ? 'admin.user.update' : 'admin.user.store', $user) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($user->exists ? 'patch' : 'post')

        @foreach ($roles as $role)
            <p class="form-check form-switch">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="form-check-input" role="switch" id="{{ $role->id }}" @foreach ($user->roles as $userRole)
                    @if ($userRole->id === $role->id)
                        checked
                    @endif
                @endforeach>
                <label class="form-check-label" for="{{ $role->id }}">{{ $role->name }}</label>
            </p>
        @endforeach

        <p>
            <button class="btn btn-primary">
                @if ($user->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </p>

    </form>

@endsection
