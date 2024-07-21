<footer class="footer bg-black">
    <div class="container">
        <div class="footer-grid">
            <div class="box">
                <a href="index.html">
                    <img src="{{ asset('images/Logo-footer.png') }}" alt="logo">
                </a>
                <div class="card">
                    <h4>S'inscrire à la Newsletter</h4>
                    <p class="text-sm">
                        Abonnez-vous maintenant pour recevoir des conseils sur la façon de faire passer votre entreprise au niveau supérieur.
                    </p>

                    <form action="{{ route('newsletter.store') }}" method="POST">
                        @csrf

                        <p>
                            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Votre adresse email..." >
                            {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                        </p>

                        <button type="submit" class="bouton bouton-primary bouton-block">S'abonner</button>
                    </form>
                </div>

                <h4>Nos réseaux sociaux</h4>
                <div class="social-medias">
                    <a href="about.html"><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href="about.html"><img src="{{ asset('images/twitter.png') }}" alt=""></a>
                    <a href="about.html"><img src="{{ asset('images/linkedin.png') }}" alt=""></a>
                    <a href="about.html"><img src="{{ asset('images/instagram.png') }}" alt=""></a>
                    <a href="about.html"><img src="{{ asset('images/youtube.png') }}" alt=""></a>
                </div>

            </div>
            <div class="box">
                <h4>Liens utiles</h4>
                <ul>
                    <li><a href="{{ route('about') }}">A propos</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact.create') }}">Contact</a></li>
                    <li><a href="{{ route('policy') }}">Politique de confidentialité</a></li>
                </ul>
            </div>
            <div class="box">
                <h4>Resources</h4>
                <ul>
                    @auth
                        <li class="text-success">Salut {{ auth()->user()->name }} !</li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-warning btn-sm">
                                    Se déconnecter
                                </button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('register') }}">Créer un compte</a></li>
                        <li><a href="{{ route('login') }}">Se connecter</a></li>
                    @endauth
                </ul>
            </div>
            <div class="box">
                <h4>Contact</h4>
                <ul>
                    <li><span class="contact">Adresse :</span> Cité des palmiers-Carrefour Express. Douala </li>
                    <li><a href="{{ route('student.create') }}">Inscription des élèves</a></li>
                    <li><a href="{{ route('teacher.create') }}">Inscription des professeurs</a></li>
                    <li><span class="contact">Téléphone :</span> 695 478 293 / 694 212 383</li>
                    <li><span class="contact">Wathsapp :</span> 698 110 561</li>
                    <li><span class="contact">Email :</span> academiedeselites237@gmail.com</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="copyright">
            <p>Copyright &copy; {{ date('Y') }} - Academie des élites - Tous droits réservés par Alex Georgy Esaki</p>
        </div>
    </div>
</footer>
