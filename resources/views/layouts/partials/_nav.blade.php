<!-- Desktop navigation menu -->
<nav class="navigation">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/Logo-desktop.png') }}" alt="logo"></a>
    </div>

    <ul>
        <li>
            <a class="{{ set_active_route('home') }}" href="{{ route('home') }}">Accueil</a>
        </li>
        <li>
            <a class="{{ set_active_route('about') }}" href="{{ route('about') }}">Apropos</a>
        </li>
        <li>
            <a class="{{ set_active_route('services') }}" href="{{ route('services') }}">Services</a>
        </li>
        <li>
            <a class="{{ set_active_route('blog.index') }}" href="{{ route('blog.index') }}">Blog</a>
        </li>
        <li>
            <a href="{{ route('contact.create') }}" class="button black">Contact</a>
        </li>
    </ul>
</nav>
<!-- End of desktop navigation menu -->

<nav class="navigation mobile-nav">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/Logo-Mobile.png') }}" alt="logo"></a>
    </div>
    <div class="menu-icon">
        <img src="{{ asset('images/Menu-bars.png') }}" alt="logo">
    </div>
</nav>

<div class="mobile-menu-container">
    <div class="close-icon">
        <img src="{{ asset('images/XOutline.png') }}" alt="XOutline">
    </div>

    <ul>
        <li>
            <a class="{{ set_active_route('home') }}" href="{{ route('home') }}">Accueil</a>
        </li>
        <li>
            <a class="{{ set_active_route('about') }}" href="{{ route('about') }}">Apropos</a>
        </li>
        <li>
            <a class="{{ set_active_route('services') }}" href="{{ route('services') }}">Services</a>
        </li>
        <li>
            <a class="{{ set_active_route('blog.index') }}" href="{{ route('blog.index') }}">Blog</a>
        </li>
        <li>
            <a href="{{ route('contact.create') }}" class="button black">Contactez-nous</a>
        </li>
    </ul>
</div>
<!-- End of mobile navigation menu -->
