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
                    <p>Informations personnels de l'enseignant.<br><span>25 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>2</span>
                    <p>Expérience Professionnelle.<br><span>60 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>3</span>
                    <p>Formation<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>4</span>
                    <p>Compétences<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>5</span>
                    <p>Disponibilité<br><span>30 secs to complete</span></p>
                </li>
                <li class="step">
                    <span>6</span>
                    <p>Méthodologie d'enseignement et motivation.<br><span>30 secs to complete</span></p>
                </li>
            </ul>
        </div>
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf

            <div class="form-one form-step active">
                <div class="bg-svg"></div>
                <h2>Entrez vos informations personnels correctement.</h2>
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
                    <label class="form-label" for="langues">Langues parlées</label>
                    <input class="form-control @error('langues') is-invalid @enderror" type="text" name="langues" id="langues" placeholder="e.g Anglais" value="{{ old('langues') }}">
                    @error('langues')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-two form-step">
                <div class="bg-svg"></div>
                <h2>Expérience Professionnelle.</h2>
                <div class="form-group">
                    <label class="form-label" for="etablissement_actuel">Etablissement scolaire actuel (le cas échéant) :</label>
                    <input class="form-control @error('etablissement_actuel') is-invalid @enderror" type="text" id="etablissement_actuel" name="etablissement_actuel" value="{{ old('etablissement_actuel') }}">
                    @error('etablissement_actuel')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="poste_occupe">Poste occupé :</label>
                    <input class="form-control @error('poste_occupe') is-invalid @enderror" type="text" id="poste_occupe" name="poste_occupe" value="{{ old('poste_occupe') }}">
                    @error('poste_occupe')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="duree">Durée de service :</label>
                    <input class="form-control @error('duree') is-invalid @enderror" type="text" id="duree" name="duree" value="{{ old('duree') }}">
                    @error('duree')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="etablissement_precedent">Etablissements scolaires précédents :</label>
                    <input class="form-control @error('etablissement_precedent') is-invalid @enderror" type="text" id="etablissement_precedent" name="etablissement_precedent" value="{{ old('etablissement_precedent') }}">
                    @error('etablissement_precedent')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="experiences">Autres expériences pertinentes :</label>
                    <input class="form-control @error('experiences') is-invalid @enderror" type="text" id="experiences" name="experiences" value="{{ old('experiences') }}">
                    @error('experiences')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-three form-step">
                <div class="bg-svg"></div>
                <h2>Formation</h2>
                <div class="form-group">
                    <label class="form-label" for="diplomes">Diplômes obtenus :</label>
                    <input class="form-control @error('diplomes') is-invalid @enderror" type="text" id="diplomes" name="diplomes" value="{{ old('diplomes') }}">
                    @error('diplomes')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="niveau">Niveau d'études :</label>
                    <input class="form-control @error('niveau') is-invalid @enderror" type="text" id="niveau" name="niveau" value="{{ old('niveau') }}">
                    @error('niveau')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="specialisation">Spécialisation :</label>
                    <input class="form-control @error('specialisation') is-invalid @enderror" type="text" id="specialisation" name="specialisation" value="{{ old('specialisation') }}">
                    @error('specialisation')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="certifications">Certifications :</label>
                    <input class="form-control @error('certifications') is-invalid @enderror" type="text" id="certifications" name="certifications" value="{{ old('certifications') }}">
                    @error('certifications')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-four form-step">
                <div class="bg-svg"></div>
                <h2>Compétences</h2>
                <p>Matières que vous êtes capable d'enseigner :</p>
                <div class="checkbox">
                    @foreach ($matieres as $matiere)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="matieres[]" value="{{ $matiere->id }}" class="form-check-input" role="switch" id="{{ $matiere->id }}">
                            <label class="form-check-label" for="{{ $matiere->id }}">{{ $matiere->name }}</label>
                        </p>
                    @endforeach
                </div>
                <p>Niveaux scolaires que vous pouvez enseigner :</p>
                <div class="checkbox">
                    @foreach ($niveaux as $niveau)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="niveaux[]" value="{{ $niveau->id }}" class="form-check-input" role="switch" id="{{ $niveau->id }}">
                            <label class="form-check-label" for="{{ $niveau->id }}">{{ $niveau->name }}</label>
                        </p>
                    @endforeach
                </div>
            </div>

            <div class="form-five form-step">
                <div class="bg-svg"></div>
                <h2>Disponibilité : *</h2>
                <p>Jour de la semaine disponibles.</p>
                <div class="checkbox">
                    @foreach ($jours as $jour)
                        <p class="form-check form-switch">
                            <input type="checkbox" name="jours[]" value="{{ $jour->id }}" class="form-check-input" role="switch" id="{{ $jour->id }}">
                            <label class="form-check-label" for="{{ $jour->id }}">{{ $jour->name }}</label>
                        </p>
                    @endforeach
                </div>
                <div>
                    <label for="plages">Plages horaires disponibles :</label>
                    <input class="form-control @error('plages') is-invalid @enderror" type="text" name="plages" id="plages" placeholder="e.g Akwa - rue 1876" value="{{ old('plages') }}">
                    @error('plages')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-six form-step">
                <div class="bg-svg"></div>
                <h2>Méthodologie d'enseignement : *</h2>
                <p>Décrivez brièvement votre approche pédagogique et les méthodes que vous utilisez pour aider les élèves à atteindre leurs objectifs d'apprentissage.</p>
                <div class="form-group">
                    <textarea name="methodologie" id="methodologie" class="form-control @error('methodologie') is-invalid @enderror">{{ old('methodologie') }}</textarea>
                    @error('methodologie')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <h2>Motivation : *</h2>
                <p>Expliquez pourquoi vous souhaitez rejoindre notre plateforme d'assistance scolaire en ligne et ce que vous pouvez apporter en tant qu'enseignant.</p>
                <div class="form-group">
                    <textarea name="motivation" id="motivation" class="form-control @error('motivation') is-invalid @enderror">{{ old('motivation') }}</textarea>
                    @error('motivation')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
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
