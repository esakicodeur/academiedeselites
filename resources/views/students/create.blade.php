@extends('base')

@section('content')
<div class="container">
    <div class="form-box">
        <div class="progression">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo-sm.png') }}" alt="logo"></a>
            </div>
            <ul class="progression-steps">
                <li class="step active">
                    <span>1</span>
                    <p>Comment avez-vous entendu parler de nous ?<br><span>25 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>2</span>
                    <p>Disponibilité<br><span>60 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>3</span>
                    <p>Objectifs d'apprentissage<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>4</span>
                    <p>Domaines d'interêt<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>5</span>
                    <p>Formulaire d'inscription pour les élèves<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>6</span>
                    <p>Conditions d'utilisation<br><span>30 secs to complete</span></p>
                </li>
            </ul>
        </div>

        <form action="{{ route('student.store') }}" method="POST">
            @csrf

            <div class="form-one form-step active">
                <div class="bg-svg"></div>
                <h2>Comment avez-vous entendu parler de nous ?</h2>
                <div class="checkbox">
                    @foreach ($informations as $information)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="information[]" value="{{ $information->id }}" class="form-check-input" role="switch" id="{{ $information->id }}">
                            <label class="form-check-label" for="{{ $information->id }}">{{ $information->name }}</label>
                        </p>
                    @endforeach
                    <div class="form-group">
                        <label class="form-label" for="autre">Autre (Preciser)</label>
                        <input class="form-control @error('autre') is-invalid @enderror" type="text" id="autre" name="autre" value="{{ old('autre') }}">
                        @error('autre')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-two form-step">
                <div class="bg-svg"></div>
                <h2>Disponibilité : *</h2>
                <p>Jour de la semaine disponibles pour les sessions d'assistance.</p>
                <div class="checkbox">
                    @foreach ($jours as $jour)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="jours[]" value="{{ $jour->id }}" class="form-check-input" role="switch" id="{{ $jour->id }}">
                            <label class="form-check-label" for="{{ $jour->id }}">{{ $jour->name }}</label>
                        </p>
                    @endforeach
                </div>
            </div>

            <div class="form-three form-step">
                <div class="bg-svg"></div>
                <h2>Objectifs d'apprentissage : *</h2>
                <p>Décrivez brièvement vos objectifs d'apprentissage et ce que vous espérez accomplir en rejoignant notre plateforme d'assistance scolaire en ligne.</p>
                <div class="form-group">
                    <textarea name="objectifs" id="objectifs" class="form-control @error('objectifs') is-invalid @enderror">{{ old('objectifs') }}</textarea>
                    @error('objectifs')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-four form-step">
                <div class="bg-svg"></div>
                <h2>Domaines d'interêt : *</h2>
                <p>Matières dans lesquelles vous avez besoin d'assistance.</p>
                <div class="checkbox">
                    @foreach ($matieres as $matiere)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="matieres[]" value="{{ $matiere->id }}" class="form-check-input" role="switch" id="{{ $matiere->id }}">
                            <label class="form-check-label" for="{{ $matiere->id }}">{{ $matiere->name }}</label>
                        </p>
                    @endforeach
                </div>
            </div>

            <div class="form-five form-step">
                <div class="bg-svg"></div>
                <h2>Formulaire d'inscription pour les élèves : *</h2>
                <p>Entrez vos informations personnels correctement.</p>
                <div class="form-group">
                    <label class="form-label" for="nom">Nom(s)</label>
                    <input class="form-control @error('nom') is-invalid @enderror" type="text" id="nom" name="nom" value="{{ old('nom') }}">
                    @error('nom')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="prenom">Prémon(s)</label>
                    <input class="form-control @error('prenom') is-invalid @enderror" type="text" id="prenom" name="prenom" value="{{ old('prenom') }}">
                    @error('prenom')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Adresse email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="e.g nom@gmail.com" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Numéro de téléphone</label>
                    <input class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" id="phone" placeholder="e.g +237 xxx-xxx-xxx" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="adresse">Adresse</label>
                    <input class="form-control @error('adresse') is-invalid @enderror" type="text" name="adresse" id="adresse" placeholder="e.g Akwa - rue 1876" value="{{ old('adresse') }}">
                    @error('adresse')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="code_postal">Code Postal</label>
                    <input class="form-control @error('code_postal') is-invalid @enderror" type="text" name="code_postal" id="code_postal" placeholder="e.g BP 543 Manjo" value="{{ old('code_postal') }}">
                    @error('code_postal')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="pays">Pays</label>
                    <input class="form-control @error('pays') is-invalid @enderror" type="text" name="pays" id="pays" placeholder="e.g Cameroun" value="{{ old('pays') }}">
                    @error('pays')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="ville">Ville</label>
                    <input class="form-control @error('ville') is-invalid @enderror" type="text" name="ville" id="ville" placeholder="e.g Douala" value="{{ old('ville') }}">
                    @error('ville')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="niveau">Niveau scolaire</label>
                    <input class="form-control @error('niveau') is-invalid @enderror" type="text" name="niveau" id="niveau" placeholder="e.g Terminale C" value="{{ old('niveau') }}">
                    @error('niveau')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="etablissement_actuel">Etablissement scolaire actuel.</label>
                    <input class="form-control @error('etablissement_actuel') is-invalid @enderror" type="text" name="etablissement_actuel" id="etablissement_actuel" placeholder="e.g Lycée de Manjo" value="{{ old('etablissement_actuel') }}">
                    @error('etablissement_actuel')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-six form-step">
                <div class="bg-svg"></div>
                <h2>Conditions d'utilisation : *</h2>
                <a href="{{ route('conditions') }}" target="_blank">Conditions à accepter.</a>
                <p>En cochant cette case, j'accepte les conditions d'utilisation de la plateforme d'assistance scolaire en ligne et je m'engage a respecter les règles et les normes de conduite établies par la plateforme.</p>
                <div class="checkbox">
                    <div class="form-check form-switch">
                        <input type="hidden" name="accepte">
                        <input type="checkbox" name="accepte" value="1" class="form-check-input @error('accepte') is-invalid @enderror" role="switch" id="accepte">
                        <label class="form-check-label" for="form-label">J'accepte les conditions d'utilisation.</label>
                        @error('accepte')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-prev" disabled>Rentrer</button>
                <button type="button" class="btn-next">Prochaine étape</button>
                <button type="submit" class="btn-submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>
@endsection
