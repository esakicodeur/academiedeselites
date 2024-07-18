<!-- Desktop navigation menu -->
<nav class="navigation">
    <div class="logo">
        <a href="index.html"><img src="images/Logo-desktop.png" alt="logo"></a>
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
            <a href="#">Blog</a>
        </li>
        <li>
            <a href="{{ route('contact.create') }}" class="button black">Contactez-nous</a>
        </li>
    </ul>
</nav>
<!-- End of desktop navigation menu -->

<nav class="mobile-nav">
    <div class="logo">
        <img src="images/Logo-Mobile.png" alt="logo">
    </div>
    <div class="menu-icon">
        <img src="images/Menu-bars.png" alt="logo">
    </div>
</nav>

<div class="mobile-menu-container">
    <div class="close-icon">
        <img src="images/XOutline.png" alt="XOutline">
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
            <a href="blog.html">Blog</a>
        </li>
        <li>
            <a href="contact.html" class="button black">Contactez-nous</a>
        </li>
    </ul>
</div>
<!-- End of mobile navigation menu -->
