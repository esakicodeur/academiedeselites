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
            <li class="list-group-item">{{ $contact->email }}</li>
            <li class="list-group-item">{{ $contact->phone }}</li>
            <li class="list-group-item">{{ $contact->pays }}</li>
            <li class="list-group-item">{{ $contact->ville }}</li>
            <li class="list-group-item">
                <p class="card-text">{{ $contact->message }}</p>
            </li>
          </ul>
        </div>
    </div>
@endsection
