@extends('admin.admin')

@section('title', $student->nom)

@section('content')
    <div class="card">
        <h2 class="card-header">
            Informations detaillees sur l'eleve
        </h2>
        <div class="card-body">
          <h3 class="card-title"></h3>
          <ul class="list-group list-group-flush">
            <h4 class="my-3 text-primary">Informations personnelles</h4>
            <li class="list-group-item"><span class="fw-bold">Nom(s) : </span> {{ $student->nom }}</li>
            <li class="list-group-item"><span class="fw-bold">Prenom(s) : </span> {{ $student->prenom }}</li>
            <li class="list-group-item"><span class="fw-bold">Email : </span> {{ $student->email }}</li>
            <li class="list-group-item"><span class="fw-bold">Telephone : </span> {{ $student->phone }}</li>
            <li class="list-group-item"><span class="fw-bold">Adresse : </span> {{ $student->adresse }}</li>
            <li class="list-group-item"><span class="fw-bold">Code postal : </span> {{ $student->code_postal }}</li>
            <li class="list-group-item"><span class="fw-bold">niveau : </span> {{ $student->niveau }}</li>
            <li class="list-group-item"><span class="fw-bold">Etablissement actuel : </span> {{ $student->etablissement_actuel }}</li>
            <li class="list-group-item"><span class="fw-bold">Pays : </span>{{ $student->pays }}</li>
            <li class="list-group-item"><span class="fw-bold">Ville : </span>{{ $student->ville }}</li>

            <h4 class="my-3 text-primary">Comment avez-vous entendu parler de nous ?</h4>
            <li class="list-group-item"><span class="fw-bold">J'ai entendu parler de vous par :</span>@foreach ($student->informations as $informations)
                <span>{{ $informations->name }}, </span>
            @endforeach</li>
            <li class="list-group-item"><span class="fw-bold">Autre : </span>{{ $student->autre }}</li>

            <h4 class="my-3 text-primary">Disponibilites</h4>
            <li class="list-group-item"><span class="fw-bold">Jours : </span>@foreach ($student->jours as $jours)
                <span>{{ $jours->name }}, </span>
            @endforeach</li>

            <h4 class="my-3 text-primary">Domaires d'interet</h4>
            <li class="list-group-item"><span class="fw-bold">Matieres : </span>@foreach ($student->matieres as $matieres)
                <span>{{ $matieres->name }}, </span>
            @endforeach</li>

            <h4 class="my-3 text-primary">Objectifs</h4>
            <li class="list-group-item">
                <span class="fw-bold">Objectifs :</span>
                <p class="card-text">{{ $student->objectifs }}</p>
            </li>
          </ul>
        </div>
    </div>
@endsection
