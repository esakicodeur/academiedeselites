@extends('admin.admin')

@section('title', "Modifier le profile")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5">

        @csrf
        @method('put')

        @include('shared.input', ['label' => 'Name', 'name' => 'name', 'value' => Auth::user()->name])

        @include('shared.input', ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'value' => Auth::user()->email])

        <p>
            <button class="btn btn-primary">
                Modifier
            </button>
        </p>

    </form>

    <form action="#" method="POST" enctype="multipart/form-data" class="bg-light py-5 px-5 mt-5">

        @csrf
        @method('put')

        @include('shared.input', ['label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])

        @include('shared.input', ['label' => 'Confirmez mot de passe', 'name' => 'password_confirmation', 'type' => 'password'])

        <p>
            <button class="btn btn-primary">
                Modifier
            </button>
        </p>

    </form>

@endsection
