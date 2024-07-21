@extends('admin.admin')

@section('title', $user->exists ? "Editer un utilisateur" : "Créer un utilisateur")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($user->exists ? 'admin.user.update' : 'admin.user.store', $user) }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method($user->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => $user->name])

        @include('shared.input', ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'value' => $user->email])

        @include('shared.input', ['label' => 'Mot de passe', 'name' => 'password', 'type' => 'password', 'value' => $user->password])

        @include('shared.input', ['label' => 'Confirmez mot de passe', 'name' => 'password_confirmation', 'type' => 'password', 'value' => $user->password])

        {{-- @include('shared.select', ['label' => 'Tags', 'name' => 'tags', 'value' => $post->tags()->pluck('id'), 'multiple' => true, 'tags' => $tags]) --}}


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
