<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/js/app.js', 'resources/js/main.js'])
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('admin') }}">Administration</a>
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
                <a href="{{ route('admin.category.index') }}" @class(['nav-link', 'active' => str_contains($route, 'category.')])>categories</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" @class(['nav-link', 'active' => str_contains($route, 'tag.')])>Tags</a>
              </li>
            </ul>
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
        new TomSelect('select[multiple]', { plugins: {remove_button: {title: 'Supprimer'}} })
    </script>
</body>
</html>
