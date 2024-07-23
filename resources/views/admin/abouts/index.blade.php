@extends('admin.admin')

@section('title', 'A propos')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.about.create') }}" class="btn btn-success">Ajouter une about</a>
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
            @foreach ($abouts as $about)
                <tr>
                    <td>{{ $about->shortTitleAdmin() }}</td>
                    <td>{{ $about->shortBodyAdmin() }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.about.destroy', $about) }}" method="POST">
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
