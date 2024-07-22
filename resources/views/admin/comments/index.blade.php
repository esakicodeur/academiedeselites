@extends('admin.admin')

@section('title', 'Tous les commentaires')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Commentaires</th>
                <th>Articles</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->comment }}</td>
                    <td><a href="{{ route('blog.show', ['slug' => $comment->post->getSlug(), 'post' => $comment->post]) }}">{{ $comment->post->title }}</a></td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <form action="{{ route('admin.comment.destroy', $comment) }}" method="POST">
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
        {{ $comments->links() }}
    </div>
@endsection
