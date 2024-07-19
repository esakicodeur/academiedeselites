@extends('base')

@section('content')
<div class="container">
    <div class="form-box">
        <div class="progression">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="images/logo-sm.png" alt="logo"></a>
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

        {{-- @error($name)
            <span class="invalid-feedback">
                {{ $message }}
            </span>

            @error($name) is-invalid @enderror"
        @enderror --}}


        <form action="">
            <div class="form-one form-step active">
                <div class="bg-svg"></div>
                <h2>Comment avez-vous entendu parler de nous ?</h2>
                <div class="checkbox">
                    <div class="form-check form-switch">
                        <input type="hidden" name="recommandation">
                        <input type="checkbox" name="recommandation" value="1" class="form-check-input" role="switch" id="recommandation">
                        <label class="form-check-label" for="form-label">Recommandation d'un ami ou d'un membre de la famille</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="publicite">
                        <input type="checkbox" name="publicite" value="1" class="form-check-input" role="switch" id="publicite">
                        <label class="form-check-label" for="form-label">Publicité en ligne</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="reseaux">
                        <input type="checkbox" name="reseaux" value="1" class="form-check-input" role="switch" id="reseaux">
                        <label class="form-check-label" for="form-label">Réseaux sociaux</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="internet">
                        <input type="checkbox" name="internet" value="1" class="form-check-input" role="switch" id="internet">
                        <label class="form-check-label" for="form-label">Recherche sur internet</label>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="autre"> Autre (préciser)</label>
                        <input class="form-control" type="text" id="autre" name="autre" value="">
                    </div>
                </div>
            </div>

            <div class="form-two form-step">
                <div class="bg-svg"></div>
                <h2>Disponibilité : *</h2>
                <p>Jour de la semaine disponibles pour les sessions d'assistance.</p>
                <div class="checkbox">
                    <div class="form-check form-switch">
                        <input type="hidden" name="lundi">
                        <input type="checkbox" name="lundi" value="1" class="form-check-input" role="switch" id="lundi">
                        <label class="form-check-label" for="form-label">Lundi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="mardi">
                        <input type="checkbox" name="mardi" value="1" class="form-check-input" role="switch" id="mardi">
                        <label class="form-check-label" for="form-label">Mardi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="mercredi">
                        <input type="checkbox" name="mercredi" value="1" class="form-check-input" role="switch" id="mercredi">
                        <label class="form-check-label" for="form-label">Mercredi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="jeudi">
                        <input type="checkbox" name="jeudi" value="1" class="form-check-input" role="switch" id="jeudi">
                        <label class="form-check-label" for="form-label">Jeudi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="vendredi">
                        <input type="checkbox" name="vendredi" value="1" class="form-check-input" role="switch" id="vendredi">
                        <label class="form-check-label" for="form-label">Vendredi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="samedi">
                        <input type="checkbox" name="samedi" value="1" class="form-check-input" role="switch" id="samedi">
                        <label class="form-check-label" for="form-label">Samedi</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="dimanche">
                        <input type="checkbox" name="dimanche" value="1" class="form-check-input" role="switch" id="dimanche">
                        <label class="form-check-label" for="form-label">Dimanche</label>
                    </div>
                </div>
            </div>

            <div class="form-three form-step">
                <div class="bg-svg"></div>
                <h2>Objectifs d'apprentissage : *</h2>
                <p>Décrivez brièvement vos objectifs d'apprentissage et ce que vous espérez accomplir en rejoignant notre plateforme d'assistance scolaire en ligne.</p>
                <div class="form-group">
                    <textarea name="objectifs" id="objectifs" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-four form-step">
                <div class="bg-svg"></div>
                <h2>Domaines d'interêt : *</h2>
                <p>Matières dans lesquelles vous avez besoin d'assistance.</p>
                <div class="checkbox">
                    <div class="form-check form-switch">
                        <input type="hidden" name="mathematiques">
                        <input type="checkbox" name="mathematiques" value="1" class="form-check-input" role="switch" id="mathematiques">
                        <label class="form-check-label" for="form-label">Mathématiques</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="physiques">
                        <input type="checkbox" name="physiques" value="1" class="form-check-input" role="switch" id="physiques">
                        <label class="form-check-label" for="form-label">Physiques</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="chimie">
                        <input type="checkbox" name="chimie" value="1" class="form-check-input" role="switch" id="chimie">
                        <label class="form-check-label" for="form-label">Chimie</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="svt">
                        <input type="checkbox" name="svt" value="1" class="form-check-input" role="switch" id="svt">
                        <label class="form-check-label" for="form-label">SVT</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="francais">
                        <input type="checkbox" name="francais" value="1" class="form-check-input" role="switch" id="francais">
                        <label class="form-check-label" for="form-label">Français</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="anglais">
                        <input type="checkbox" name="anglais" value="1" class="form-check-input" role="switch" id="anglais">
                        <label class="form-check-label" for="form-label">Anglais</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="allemand">
                        <input type="checkbox" name="allemand" value="1" class="form-check-input" role="switch" id="allemand">
                        <label class="form-check-label" for="form-label">Allemand</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="espagnol">
                        <input type="checkbox" name="espagnol" value="1" class="form-check-input" role="switch" id="espagnol">
                        <label class="form-check-label" for="form-label">Espagnol</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="informatique">
                        <input type="checkbox" name="informatique" value="1" class="form-check-input" role="switch" id="informatique">
                        <label class="form-check-label" for="form-label">Informatique</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="histoire_geo_ecm">
                        <input type="checkbox" name="histoire_geo_ecm" value="1" class="form-check-input" role="switch" id="histoire_geo_ecm">
                        <label class="form-check-label" for="form-label">Histoire/Géographie/ECM</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="phylosophie">
                        <input type="checkbox" name="phylosophie" value="1" class="form-check-input" role="switch" id="phylosophie">
                        <label class="form-check-label" for="form-label">Phylosophie</label>
                    </div>
                </div>
            </div>

            <div class="form-five form-step">
                <div class="bg-svg"></div>
                <h2>Formulaire d'inscription pour les élèves : *</h2>
                <p>Entrez vos informations personnels correctement.</p>
                <div class="form-group">
                    <label class="form-label" for="nom">Nom(s)</label>
                    <input class="form-control" type="text" id="nom" name="nom" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="prenom">Prémon(s)</label>
                    <input class="form-control" type="text" id="prenom" name="prenom" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Adresse email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="e.g nom@gmail.com">
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Numéro de téléphone</label>
                    <input class="form-control" type="tel" name="phone" id="phone" placeholder="e.g +237 xxx-xxx-xxx">
                </div>
                <div class="form-group">
                    <label class="form-label" for="adresse">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" placeholder="e.g Akwa - rue 1876">
                </div>
                <div class="form-group">
                    <label class="form-label" for="code_postal">Code Postal</label>
                    <input class="form-control" type="text" name="code_postal" id="code_postal" placeholder="e.g BP 543 Manjo">
                </div>
                <div class="form-group">
                    <label class="form-label" for="pays">Pays</label>
                    <input class="form-control" type="text" name="pays" id="pays" placeholder="e.g Cameroun">
                </div>
                <div class="form-group">
                    <label class="form-label" for="ville">Ville</label>
                    <input class="form-control" type="text" name="ville" id="ville" placeholder="e.g Douala">
                </div>
                <div class="form-group">
                    <label class="form-label" for="niveau_scolaire">Niveau scolaire</label>
                    <input class="form-control" type="text" name="niveau_scolaire" id="niveau_scolaire" placeholder="e.g Terminale C">
                </div>
                <div class="form-group">
                    <label class="form-label" for="etablissement_actuel">Etablissement scolaire actuel.</label>
                    <input class="form-control" type="text" name="etablissement_actuel" id="etablissement_actuel" placeholder="e.g Lycée de Majo">
                </div>
            </div>

            <div class="form-six form-step">
                <div class="bg-svg"></div>
                <h2>Conditions d'utilisation : *</h2>
                <p>En cochant cette case, j'accepte les conditions d'utilisation de la plateforme d'assistance scolaire en ligne et je m'engage a respecter les règles et les normes de conduite établies par la plateforme.</p>
                <div class="form-check form-switch">
                    <input type="hidden" name="mathematiques">
                    <input type="checkbox" name="mathematiques" value="1" class="form-check-input" role="switch" id="mathematiques">
                    <label class="form-check-label" for="form-label">J'accepte les conditions d'utilisation.</label>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-prev" disabled>Rentrer</button>
                <button type="button" class="btn-next">Prochaine étape</button>
                <button type="button" class="btn-submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>
@endsection
