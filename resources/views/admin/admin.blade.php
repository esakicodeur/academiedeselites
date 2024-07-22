<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/js/app.js', 'resources/js/main.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <title>@yield('title') | Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('admin.admin') }}">Administration</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          @php
              $route = request()->route()->getName();
          @endphp

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" @class(['nav-link', 'active' => str_contains($route, 'post.')])>Articles</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.student.index') }}" @class(['nav-link', 'active' => str_contains($route, 'student.')])>Elèves</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.teacher.index') }}" @class(['nav-link', 'active' => str_contains($route, 'teacher.')])>Enseignants</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" @class(['nav-link', 'active' => str_contains($route, 'user.')])>Utilisateurs</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.contact.index') }}" @class(['nav-link', 'active' => str_contains($route, 'contact.')])>Contacts</a>
              </li>
            </ul>

            <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <span class="nav-item mx-4 text-success fw-bold">{{ auth()->user()->name }}</span>
                    <form class="nav-item" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-warning btn-sm">
                            Se déconnecter
                        </button>
                    </form>
                @endauth
            </div>
          </div>
        </div>
      </nav>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <div class="my-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <script>
        // Initialize TomSelect
        new TomSelect('select[multiple]', { plugins: {remove_button: {title: 'Supprimer'}} })

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('textarea'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error during initialization of the editor', error);
            });
    </script>

    <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
    @include('flashy::message')
</body>
</html>
