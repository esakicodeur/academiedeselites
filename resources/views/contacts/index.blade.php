@extends('admin.admin')

@section('title', 'Tous les contacts')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
    </div>

    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->pays }}</td>
                        <td>{{ $message->ville }}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end">
                                <a href="{{ route('admin.contact.show', ['slug' => $message->getSlug(), 'contact' => $message]) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginate">
            {{ $messages->links() }}
        </div>
    </div>
@endsection
