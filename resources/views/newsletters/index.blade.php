@extends('admin.admin')

@section('title', 'Tous les emails')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
    </div>

    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Email</th>
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

        <div class="paginate">
            {{ $newsletters->links() }}
        </div>
    </div>
@endsection
