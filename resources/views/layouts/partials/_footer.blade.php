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
                    <form>
                        <input type="email" id="email" placeholder="Entrer votre Email">
                        <button type="submit" class="bouton bouton-primary bouton-block">S'abonner</button>
                    </form>
                </div>

                <h4>Nos réseaux sociaux</h4>
                <div class="social-medias">
                    <img src="images/facebook.png" alt="">
                    <img src="images/twitter.png" alt="">
                    <img src="images/linkedin.png" alt="">
                    <img src="images/instagram.png" alt="">
                    <img src="images/youtube.png" alt="">
                </div>

            </div>
            <div class="box">
                <h4>Liens utiles</h4>
                <ul>
                    <li><a href="about.html">A propos</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="policy.html">Politique de confidentialité</a></li>
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
