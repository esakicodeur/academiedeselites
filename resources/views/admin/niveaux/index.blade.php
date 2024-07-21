@extends('admin.admin')

@section('title', 'Tous les niveaux')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.niveau.create') }}" class="btn btn-success">Ajouter un niveau</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($niveaux as $niveau)
                <tr>
                    <td>{{ $niveau->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.niveau.edit', $niveau) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.niveau.destroy', $niveau) }}" method="POST">
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

    <div class="paginate">
        {{ $niveaux->links() }}
    </div>
@endsection
