@extends('admin.admin')

@section('title', $teacher->nom)

@section('content')
    <div class="card">
        <h2 class="card-header">
            Informations detaillees sur l'enseignant
        </h2>
        <div class="card-body">
          <h3 class="card-title"></h3>
          <ul class="list-group list-group-flush">
            <h4 class="my-3 text-primary">Informations personnelles</h4>
            <li class="list-group-item"><span class="fw-bold">Nom(s) : </span> {{ $teacher->nom }}</li>
            <li class="list-group-item"><span class="fw-bold">Prenom(s) : </span> {{ $teacher->prenom }}</li>
            <li class="list-group-item"><span class="fw-bold">Email : </span> {{ $teacher->email }}</li>
            <li class="list-group-item"><span class="fw-bold">Telephone : </span> {{ $teacher->phone }}</li>
            <li class="list-group-item"><span class="fw-bold">Adresse : </span> {{ $teacher->adresse }}</li>
            <li class="list-group-item"><span class="fw-bold">Code postal : </span> {{ $teacher->code_postal }}</li>
            <li class="list-group-item"><span class="fw-bold">Pays : </span>{{ $teacher->pays }}</li>
            <li class="list-group-item"><span class="fw-bold">Ville : </span>{{ $teacher->ville }}</li>
            <li class="list-group-item"><span class="fw-bold">Langues : </span>{{ $teacher->langues }}</li>

            <h4 class="my-3 text-primary">Experience professionnelle</h4>
            <li class="list-group-item"><span class="fw-bold">Etablissement actuel : </span> {{ $teacher->etablissement_actuel }}</li>
            <li class="list-group-item"><span class="fw-bold">Poste occupe : </span> {{ $teacher->poste_occupe }}</li>
            <li class="list-group-item"><span class="fw-bold">Duree : </span> {{ $teacher->duree }}</li>
            <li class="list-group-item"><span class="fw-bold">Etablissement precedent : </span> {{ $teacher->etablissement_precedent }}</li>
            <li class="list-group-item"><span class="fw-bold">Experiences : </span> {{ $teacher->experiences }}</li>

            <h4 class="my-3 text-primary">Formations</h4>
            <li class="list-group-item"><span class="fw-bold">Diplomes : </span> {{ $teacher->diplomes }}</li>
            <li class="list-group-item"><span class="fw-bold">Niveau : </span> {{ $teacher->niveau }}</li>
            <li class="list-group-item"><span class="fw-bold">Specialisations : </span> {{ $teacher->specialisation }}</li>
            <li class="list-group-item"><span class="fw-bold">Certifications : </span> {{ $teacher->certifications }}</li>

            <h4 class="my-3 text-primary">Competences</h4>
            <li class="list-group-item"><span class="fw-bold">Matieres capable d'enseigner : </span>@foreach ($teacher->matieres as $matieres)
                <span>{{ $matieres->name }}, </span>
            @endforeach</li>
            <li class="list-group-item"><span class="fw-bold">Niveaux capable d'enseigner : </span>@foreach ($teacher->niveaux as $niveaux)
                <span>{{ $niveaux->name }}, </span>
            @endforeach</li>

            <h4 class="my-3 text-primary">Disponibilites</h4>
            <li class="list-group-item"><span class="fw-bold">Jours : </span>@foreach ($teacher->jours as $jours)
                <span>{{ $jours->name }}, </span>
            @endforeach</li>
            <li class="list-group-item"><span class="fw-bold">Plages : </span> {{ $teacher->plages }}</li>

            <h4 class="my-3 text-primary">Methodologie et Motivation</h4>
            <li class="list-group-item">
                <span class="fw-bold">Methodologie :</span>
                <p class="card-text">{{ $teacher->methodologie }}</p>
            </li>
            <li class="list-group-item">
                <span class="fw-bold">Motivation :</span>
                <p class="card-text">{{ $teacher->motivation }}</p>
            </li>

          </ul>
        </div>
    </div>
@endsection
