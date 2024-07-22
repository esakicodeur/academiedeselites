@extends('admin.admin')

@section('title', 'Administration')

@section('content')

<main>
    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="bg-light p-5 mb-5">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.post.index') }}">Articles</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.category.index') }}">Catégories</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.tag.index') }}">Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.student.index') }}">Elèves</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.teacher.index') }}">Enseignants</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.user.index') }}">Utilisateurs</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.role.index') }}">Roles</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.information.index') }}">Informations</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.jour.index') }}">Jours</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.matiere.index') }}">Matieres</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.niveau.index') }}">Niveaux</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.contact.index') }}">Contacts</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.newsletter.index') }}">Newsletters</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.comment.index') }}">Comments</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $users->count() }}</h2>
                            <p>Utilisateurs</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $students->count() }}</h2>
                            <p>Eleves</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $teachers->count() }}</h2>
                            <p>Enseignants</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between gap-2 mt-3">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $posts->count() }}</h2>
                            <p>Articles</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $messages->count() }}</h2>
                            <p>Contacts</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $newsletters->count() }}</h2>
                            <p>Newsletters</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="my-3">Messages reçus</h2>
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
                                            <a href="{{ route('admin.contact.show', ['slug' => $message->getSlug(), 'contact' => $message]) }}" class="btn btn-primary">Voir</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div>
                    <h2 class="my-3">Newsletters</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Emails</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $newsletter)
                                <tr>
                                    <td>{{ $newsletter->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
