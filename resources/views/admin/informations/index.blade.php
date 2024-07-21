@extends('admin.admin')

@section('title', 'Toutes les informations')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.information.create') }}" class="btn btn-success">Ajouter une information</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informations as $information)
                <tr>
                    <td>{{ $information->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.information.edit', $information) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.information.destroy', $information) }}" method="POST">
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
        {{ $informations->links() }}
    </div>
@endsection
