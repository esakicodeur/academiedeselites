@extends('admin.admin')

@section('title', 'Administration')

@section('content')

<main>
    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-4">
            <div class="h-100 p-5 bg-success border rounded-3">
                <h2>100</h2>
                <p>Utilisateurs</p>
            </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-5 bg-secondary border rounded-3">
                <h2>54</h2>
                <p>Articles</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-5 bg-info border rounded-3">
                <h2>60</h2>
                <p>Messages</p>
                </div>
            </div>

            <div>
                <h2 class="my-5">Messages reçus</h2>
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
                                    <button class="btn btn-primary">View</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</main>
@endsection
