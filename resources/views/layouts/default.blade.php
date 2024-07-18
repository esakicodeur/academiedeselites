<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/js/app.js', 'resources/js/main.js'])

    <title>{{ page_title($title) ?? '' }}</title>
</head>
<body>
    <header>
        <!-- The header section -->
        <div class="wrapper">

            <!-- Navigation -->
            @include('layouts.partials._nav')
            <!-- End of navigation -->

            <x-hero-section />
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    @include('layouts.partials._footer')
    <!-- End of footer -->

    <script src="script.js"></script>
</body>
</html>
