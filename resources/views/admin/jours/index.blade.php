@extends('admin.admin')

@section('title', 'Tous les jours')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.jour.create') }}" class="btn btn-success">Ajouter un jour</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jours as $jour)
                <tr>
                    <td>{{ $jour->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.jour.edit', $jour) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.jour.destroy', $jour) }}" method="POST">
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
        {{ $jours->links() }}
    </div>
@endsection
