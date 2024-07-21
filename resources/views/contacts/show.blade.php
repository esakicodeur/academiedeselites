@extends('admin.admin')

@section('title', $contact->name)

@section('content')
    <div class="card">
        <h2 class="card-header">
            {{ $contact->name }}
        </h2>
        <div class="card-body">
          <h3 class="card-title"></h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="fw-bold">Email : </span>{{ $contact->email }}</li>
            <li class="list-group-item"><span class="fw-bold">Téléphone : </span>{{ $contact->phone }}</li>
            <li class="list-group-item"><span class="fw-bold">Pays : </span>{{ $contact->pays }}</li>
            <li class="list-group-item"><span class="fw-bold">Ville : </span>{{ $contact->ville }}</li>
            <li class="list-group-item">
                <span class="fw-bold">Message : </span>
                <p class="card-text">{{ $contact->message }}</p>
            </li>
          </ul>
        </div>
    </div>
@endsection
