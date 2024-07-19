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
        <form action="">
            <div class="form-one form-step active">
                <div class="bg-svg"></div>
                <h2>Entrez vos informations personnels correctement.</h2>
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
                    <label class="form-label" for="langues">Langues parlées</label>
                    <input class="form-control" type="text" name="langues" id="langues" placeholder="e.g Anglais">
                </div>
            </div>

            <div class="form-two form-step">
                <div class="bg-svg"></div>
                <h2>Expérience Professionnelle.</h2>
                <div class="form-group">
                    <label class="form-label" for="etablissement_actuel">Etablissement scolaire actuel (le cas échéant) :</label>
                    <input class="form-control" type="text" id="etablissement_actuel" name="etablissement_actuel" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="poste_occupe">Poste occupé :</label>
                    <input class="form-control" type="text" id="poste_occupe" name="poste_occupe" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="duree">Durée de service :</label>
                    <input class="form-control" type="text" id="duree" name="duree" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="etablissement_precedent">Etablissements scolaires précédents :</label>
                    <input class="form-control" type="text" id="etablissement_precedent" name="etablissement_precedent" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="experiences">Autres expériences pertinentes :</label>
                    <input class="form-control" type="text" id="experiences" name="experiences" value="">
                </div>
            </div>

            <div class="form-three form-step">
                <div class="bg-svg"></div>
                <h2>Formation</h2>
                <div class="form-group">
                    <label class="form-label" for="diplomes">Diplômes obtenus :</label>
                    <input class="form-control" type="text" id="diplomes" name="diplomes" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="niveau">Niveau d'études :</label>
                    <input class="form-control" type="text" id="niveau" name="niveau" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="specialisation">Spécialisation :</label>
                    <input class="form-control" type="text" id="specialisation" name="specialisation" value="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="certificaions">Certificaions :</label>
                    <input class="form-control" type="text" id="certificaions" name="certificaions" value="">
                </div>
            </div>

            <div class="form-four form-step">
                <div class="bg-svg"></div>
                <h2>Compétences</h2>
                <p>Matières que vous êtes capable d'enseigner :</p>
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

                <p>Niveaux scolaires que vous pouvez enseigner :</p>
                <div class="checkbox">
                    <div class="form-check form-switch">
                        <input type="hidden" name="primaire">
                        <input type="checkbox" name="primaire" value="1" class="form-check-input" role="switch" id="primaire">
                        <label class="form-check-label" for="form-label">Primaire</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="secondaire">
                        <input type="checkbox" name="secondaire" value="1" class="form-check-input" role="switch" id="secondaire">
                        <label class="form-check-label" for="form-label">Secondaire</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="hidden" name="universitaire">
                        <input type="checkbox" name="universitaire" value="1" class="form-check-input" role="switch" id="universitaire">
                        <label class="form-check-label" for="form-label">Universitaire</label>
                    </div>
                </div>
            </div>

            <div class="form-five form-step">
                <div class="bg-svg"></div>
                <h2>Disponibilité : *</h2>
                <p>Jour de la semaine disponibles.</p>
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
                <div>
                    <label for="last_name">Plages horaires disponibles :</label>
                    <input type="text" name="last_name" id="last_name" placeholder="e.g Akwa - rue 1876">
                </div>
            </div>

            <div class="form-six form-step">
                <div class="bg-svg"></div>
                <h2>Méthodologie d'enseignement : *</h2>
                <p>Décrivez brièvement votre approche pédagogique et les méthodes que vous utilisez pour aider les élèves à atteindre leurs objectifs d'apprentissage.</p>
                <div class="form-group">
                    <textarea name="methodologie" id="methodologie" class="form-control"></textarea>
                </div>

                <h2>Motivation : *</h2>
                <p>Expliquez pourquoi vous souhaitez rejoindre notre plateforme d'assistance scolaire en ligne et ce que vous pouvez apporter en tant qu'enseignant.</p>
                <div class="form-group">
                    <textarea name="motivation" id="motivation" class="form-control"></textarea>
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
