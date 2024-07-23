@extends('admin.admin')

@section('title', 'Tous les articles favoris')

@section('content')
    <div class="d-flex justify-content-between align-items-center">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Likes</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->favorite_to_users->count() }} <i class="fas fa-heart"></td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <form action="{{ route('admin.post.destroy', $post) }}" method="POST">
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
