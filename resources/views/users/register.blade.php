@extends('users.base')

@section('title', 'Inscription')

@section('content')
    <main>
        <div class="d-flex align-items-center justify-content-center text-center">

            <form action="{{ route('users') }}" method="POST" class="bg-light py-5 px-5 mb-5">
                @csrf

                <a href="{{ route('home') }}"><img class="mb-4" src="{{ asset('images/logo-sm.png') }}" alt="logo" style="width: 7rem; height: 7rem;"></a>
                <h1 class="h3 mb-3 fw-normal">Créer un compte</h1>

                <p class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom d'utilisateur..." value="{{ old('name') }}">
                    <label for="name">Nom d'utilisateur</label>
                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </p>
                <p class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </p>
                <p class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe..." value="{{ old('password') }}">
                    <label for="password">Mot de passe</label>
                    @error('password')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </p>
                <p class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirmez votre mot de passe..." password>
                    <label for="password_confirmation">Confirmer votre mot de passe</label>
                    @error('password_confirmation')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </p>

                <button class="btn btn-lg btn-primary" type="submit">S'inscrire</button>

                <p class="mt-4">
                    Avez-vous déjà un compte ?
                    <a href="{{ route('login') }}" class="text-primary">Connectez-vous</a>
                </p>
                <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
            </form>

        </div>
    </main>
@endsection
