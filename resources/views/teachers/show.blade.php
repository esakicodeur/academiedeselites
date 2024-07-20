@extends('admin.admin')

@section('title', $teacher->nom)

@section('content')
    <div class="card">
        <h2 class="card-header">
            {{ $teacher->nom }}
        </h2>
        <div class="card-body">
          <h3 class="card-title"></h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $teacher->email }}</li>
            <li class="list-group-item">{{ $teacher->phone }}</li>
            <li class="list-group-item">{{ $teacher->pays }}</li>
            <li class="list-group-item">{{ $teacher->ville }}</li>
            <li class="list-group-item">
                <p class="card-text">{{ $teacher->motivation }}</p>
            </li>
          </ul>
        </div>
    </div>
@endsection
