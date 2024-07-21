@extends('admin.admin')

@section('title', 'Tous les utilisateurs')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.user.create') }}" class="btn btn-success">Ajouter un utilisateur</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Roles</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.user.destroy', $user) }}" method="POST">
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
        {{ $users->links() }}
    </div>
@endsection
