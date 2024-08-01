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
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.settings.index') }}"><i class="fas fa-gear"></i> Paramètres</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.post.index') }}"><i class="fas fa-book"></i> Articles</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.category.index') }}"><i class="fab fa-hashtag"></i> Catégories</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.tag.index') }}"><i class="fas fa-tag"></i> Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.student.index') }}"><i class="fas fa-user-pen"></i> Elèves</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.teacher.index') }}"><i class="fas fa-user-gear"></i> Enseignants</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.user.index') }}"><i class="fas fa-user"></i> Utilisateurs</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.role.index') }}"><i class="fas fa-sun"></i> Roles</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.information.index') }}"><i class="fas fa-info"></i> Informations</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.jour.index') }}"><i class="fas fa-calendar-days"></i> Jours</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.matiere.index') }}"><i class="fas fa-book-open"></i> Matieres</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.niveau.index') }}"><i class="fas fa-school"></i> Niveaux</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.contact.index') }}"><i class="fas fa-phone"></i> Contacts</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.newsletter.index') }}"><i class="fas fa-envelope"></i> Newsletters</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.comment.index') }}"><i class="fas fa-comments"></i> Comments</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.favorite.index') }}"><i class="fas fa-heart"></i> Favoris</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.policy.index') }}"><i class="fas fa-gears"></i> Policy</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.about.index') }}"><i class="fas fa-building"></i> A propos</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-decoration-none text-primary fw-bold" href="{{ route('admin.faq.index') }}"><i class="fas fa-pen"></i> Faq</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $users->count() }} <i class="fas fa-user"></i></h2>
                            <p>Utilisateurs</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $students->count() }} <i class="fas fa-user-pen"></i></h2>
                            <p>Eleves</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $teachers->count() }} <i class="fas fa-user-gear"></i></h2>
                            <p>Enseignants</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between gap-2 mt-3">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $posts->count() }} <i class="fas fa-book"></i></h2>
                            <p>Articles</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $contacts->count() }} <i class="fas fa-phone"></i></h2>
                            <p>Contacts</p>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body border rounded-3">
                            <h2>{{ $emails->count() }} <i class="fas fa-envelope"></i></h2>
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
                                            <a href="{{ route('admin.contact.show', ['slug' => $message->getSlug(), 'contact' => $message]) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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
