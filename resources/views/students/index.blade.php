@extends('admin.admin')

@section('title', 'Tous les élèves')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Ville</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->ville }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.student.show', ['slug' => $student->getSlug(), 'student' => $student]) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.student.pdf', ['slug' => $student->getSlug(), 'student' => $student]) }}" class="btn btn-primary"><i class="fas fa-download"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="paginate">
        {{ $students->links() }}
    </div>
@endsection
