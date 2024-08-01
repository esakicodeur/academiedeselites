@extends('admin.admin')

@section('title', 'Hero')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.hero.create') }}" class="btn btn-success">Ajouter une hero</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
                <tr>
                    <td>{{ $hero->shortTitleAdmin() }}</td>
                    <td>{{ $hero->shortBodyAdmin() }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.hero.edit', $hero) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.hero.destroy', $hero) }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
