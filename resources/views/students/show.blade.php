@extends('admin.admin')

@section('title', $student->nom)

@section('content')
    <div class="card">
        <h2 class="card-header">
            {{ $student->nom }}
        </h2>
        <div class="card-body">
          <h3 class="card-title"></h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $student->email }}</li>
            <li class="list-group-item">{{ $student->phone }}</li>
            <li class="list-group-item">{{ $student->pays }}</li>
            <li class="list-group-item">{{ $student->ville }}</li>
            <li class="list-group-item">
                <p class="card-text">{{ $student->objectifs }}</p>
            </li>
          </ul>
        </div>
    </div>
@endsection
