@extends('users.base')

@section('title', 'Connexion')

@section('content')
    <main>
        <div class="d-flex align-items-center justify-content-center text-center">

            <form action="{{ route('authenticate') }}" method="POST" class="bg-light py-5 px-5 mb-5">
                @csrf

                <a href="{{ route('home') }}"><img class="mb-4" src="{{ asset('images/logo-sm.png') }}" alt="logo" style="width: 7rem; height: 7rem;"></a>
                <h1 class="h3 mb-3 fw-normal">Connexion</h1>

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

                <button class="btn btn-lg btn-primary" type="submit">Se connecter</button>

                <p class="mt-4">
                    N'avez-vous pas de compte ?
                    <a href="{{ route('register') }}" class="text-primary">Créer un compte</a>
                </p>
                <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
            </form>

        </div>
    </main>
@endsection
