@extends('admin.admin')

@section('title', 'Politique de confidentialité')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.policy.create') }}" class="btn btn-success">Ajouter une policy</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Description</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($policies as $policy)
                <tr>
                    <td>{{ $policy->shortBodyAdmin() }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.policy.edit', $policy) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.policy.destroy', $policy) }}" method="POST">
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
