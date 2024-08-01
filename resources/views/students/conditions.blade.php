@extends('base')

@section('content')
<div class="container">
    <div class="form-box">

        <div  class="m-5">
            <div class="text-center mb-3">
                <a href="{{ route('home') }}"><img style="width: 100px;" src="{{ asset('images/logo-sm.png') }}" alt="logo"></a>
            </div>

            <div class="text-center">
                <h3>Conditions d'utilisation de la plateforme d'assistance scolaire en ligne.</h3>

                <h5>
                    <code>
                        Bienvenue sur notre plateforme d'assistance scolaire en ligne. En utilisant nos services, vous acceptez de vous conformer aux conditions d'utilisation suivantes. Veuillez les lire attentivement.
                    </code>
                </h5>
            </div>

            <div  class="mt-4">
                <div>
                    <h5>1. Acceptation des conditions</h5>
                    <p>En accédant et en utilisant notre plateforme, vous acceptez d'être lié par les présentes conditions d'utilisation, ainsi que par notre politique de confidentialité. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre plateforme.</p>
                </div>

                <div>
                    <h5>2. Services Offerts</h5>
                    <p>Notre plateforme propose des services d'assistance scolaire en ligne, incluant mais non limité à :
                        <ul>
                            <li>
                                <span class="fw-bold">*Cours en ligne* :</span> Vidéos, documents et modules interactifs.
                            </li>
                            <li>
                                <span class="fw-bold">*Tutoriels individuels* :</span> Séances de tutorat personnalisées avec des enseignants qualifiés.
                            </li>
                            <li>
                                <span class="fw-bold">*Ressources pédagogiques* :</span> Accès à des bibliothèques de contenus éducatifs.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>3. Inscription et compte</h5>
                    <p>Pour accéder à certains services, vous devez creér un compte :
                        <ul>
                            <li>
                                <span class="fw-bold">*Informations exactes* :</span> Fournissez des informations exactes et complètes lors de votre inscription.
                            </li>
                            <li>
                                <span class="fw-bold">*Confidentialité des indentifiants* :</span> Vous êtes responsable de la confidentialité de vos identifiants de connexion.
                            </li>
                            <li>
                                <span class="fw-bold">*Activités sous votre compte* :</span> Vous êtes responsable de toutes les activités effectuées sous votre compte.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>4. Utilisation des services</h5>
                    <p>Vous acceptez d'utiliser les services uniquement à des fins légales et conformément aux présentes conditions. Vous ne devez pas :
                        <ul>
                            <li>
                                <span class="fw-bold">*Courriels indésirables* :</span> Utiliser la plateforme pour envoyer des courriels indésirables ou des messages commerciaux non autorisés.
                            </li>
                            <li>
                                <span class="fw-bold">*Contenus illégaux* :</span> Télécharger ou partager des contenus illégaux, offensants ou inappropriés.
                            </li>
                            <li>
                                <span class="fw-bold">*Perturbation* :</span> Tenter de pirater ou de perturber le fonctionnement de la plateforme.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>5. Propriété intellectuelle</h5>
                    <p>Tous les contenus présents sur la plateforme, incluant textes, graphiques, logos, et logiciels, sont la propriété de [Nom de l'entreprise] ou de ses concédants de licence. Vous ne pouvez pas :
                        <ul>
                            <li>
                                <span class="fw-bold">*Reproduction* :</span> Reproduire, distribuer, modifier ou utiliser ces contenus sans notre autorisation expresse.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>6. Tarification et paiement</h5>
                    <p>Certaines parties de nos services peuvent être payantes :
                        <ul>
                            <li>
                                <span class="fw-bold">*Frais associés* :</span> Vous acceptez de payer tous les frais associés aux services que vous utilisez conformément aux conditions de tarification en vigueur au moment de l'achat.
                            </li>
                            <li>
                                <span class="fw-bold">*Modification des tarifs* :</span> Nous nous réservons le droit de modifier nos tarifs à tout moment.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>7. Résiliation</h5>
                    <p>Nous nous réservons le droit de suspendre ou de résilier votre accès à la plateforme à tout moment, sans préavis, si nous estimons que vous avez violé les présentes conditions d'utilisation.</p>
                </div>

                <div>
                    <h5>8. Limitation de responsabilité</h5>
                    <p>Nous nous efforçons de fournir des services de haute qualité, mais nous ne garantissons pas que la plateforme sera toujours disponible, sans erreur ou sans interruption. Nous ne sommes pas responsables des :
                        <ul>
                            <li>
                                <span class="fw-bold">*Domages directs* :</span> Résultant de l'utilisation ou de l'incapacité à utiliser nos services.
                            </li>
                            <li>
                                <span class="fw-bold">*Domages indirects* :</span> Résultant de l'utilisant ou de l'utilisation ou de l'incapacité à utiliser nos services.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>9. Modifications des conditions</h5>
                    <p>Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment. Les modifications entreront en vigueur dès leur publication sur la plateforme. Il est de votre responsabilité de :
                        <ul>
                            <li>
                                <span class="fw-bold">*Consultation régulière* :</span> Consulter régulièrement les conditions d'utilisation pour rester informé des éventuelles modifications.
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5>10. Droit Applicable</h5>
                    <p>Les présentes conditions d'utilisation sont régies par les lois en vigueur dans [votre juridiction]. Tout litige relatif à ces conditions sera soumis à la compétence exclusive des tribunaux de [votre juridiction].</p>
                </div>

                <div>
                    <h5>11. Contact</h5>
                    <p>Pour toute question concernant ces conditions d'utilisation, veuillez nous contacter à :
                        <ul>
                            <li>
                                <span class="fw-bold">*Adresse e-mail* :</span> [adresse e-mail de contact].
                            </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <p>En utilisant notre plateforme, vous reconnaissez avoir lu, compris et accepté les présentes conditions d'utilisation. Merci de votre confiance et bonne utilisation de notre service d'assistance scolaire en ligne !</p>
                </div>
            </div>

            <div  class="mt-4">
                <div class="text-center">
                    <h3>Règles et normes de conduite sur la plateforme d'assistance scolaire en ligne.</h3>

                    <h5>
                        <code>
                            Bienvenue sur notre plateforme d'assistance scolaire en ligne. Pour garantir une expérience positive et enrichissante pour tous les utilisateurs, nous avons établi les règles et normes de conduite suivantes. En utilisant notre plateforme, vous acceptez de respecter ces règles.
                        </code>
                    </h5>
                </div>

                <div>
                    <h5>1. Respect et courtoisie</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Traitement respectueux* :</span> Traitez tous les utilisateurs, enseignants et membres du personnel avec respect et courtoisie.
                        </li>
                        <li>
                            <span class="fw-bold">*Langage approprié* :</span> Utilisez un langage approprié et évitez les propos offensants, discriminatoires ou insultants.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>2. Comportement en ligne</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Interdiction du harcèlement* :</span> Toute forme de harcèlement, intimidation ou comportement menaçant est strictement interdite.
                        </li>
                        <li>
                            <span class="fw-bold">*Confidentialité* :</span> Ne partagez pas d'informations personnelles (votre adresse, numéro de téléphone, etc.) sur la plateforme. Respectez également la confidentialité des autres utilisateurs.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>3. Utilisation des contenus</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Respect des droits d'auteur* :</span> Ne téléchargez, partagez ou utilisez que des contenus pour lesquels vous avez les droits ou les autorisations nécessaires.
                        </li>
                        <li>
                            <span class="fw-bold">*Contenus inappropriés* :</span> N'affichez pas, ne partagez pas et ne diffusez pas de contenus illégaux, offensants, pornographiques, violents ou inappropriés.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>4. Participation et engagement</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Implication active* :</span> Participez activement aux cours et sessions de tutorat. Faites preuve de ponctualité et respectez les horaires établis.
                        </li>
                        <li>
                            <span class="fw-bold">*Devoirs et travaux* :</span> Faites vos devoirs et travaux de manière honnête et intègre. Toute forme de tricherie ou de plagiat est interdite.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>5. Communication</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Messages et discussions* :</span> Soyez clair et concis dans vos messages et discussions. Evitez le spam et les messages répétitifs.
                        </li>
                        <li>
                            <span class="fw-bold">*Questions et demandes* :</span> Posez des questions et faites des demandes de manière respectueuse. Attendez des réponses et suivez les instructions donneés par les enseignants et tuteurs.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>6. Sécurité</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Sécurité des comptes* :</span> Ne partagez pas vos identifiants de connexion avec d'autres personnes. Utilisez des mots de passe forts et changez-les régulièrement.
                        </li>
                        <li>
                            <span class="fw-bold">*Signalement* :</span> Signalez immédiatement toute activité suspecte ou violation des règles à l'équipe de support.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>7. Utilisation des ressources</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Accès équitable* :</span> Utilisez les ressources de manière équitable. Ne monopolisez pas les contenus ou les sessions de tutorat au détriment des autres utilisateurs.
                        </li>
                        <li>
                            <span class="fw-bold">*Téléchargement de fichiers* :</span> Ne téléchargez que les fichiers nécessaires et évitez de surcharger la plateforme.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>8. Sanctions en cas de non-respect</h5>
                    <ul>
                        <li>
                            <span class="fw-bold">*Avertissements* :</span> En cas de non-respect des règles, des avertissements peuvent être donnés.
                        </li>
                        <li>
                            <span class="fw-bold">*Suspension ou résiliation* :</span> Des violations graves ou répétées peuvent entraîner la suspension temporaire ou la résiliation définitive de votre compte.
                        </li>
                        <li>
                            <span class="fw-bold">*Actions légales* :</span> Dans les cas extrêmes, des actions légales peuvent être entreprises.
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>9. Modifications des règles</h5>
                    <p>Nous nous réservons le droit de modifier ces règles et normes ed conduite à tout moment. Les modifications entreront en vigueur dès leur publication sur la plateforme. Il est de votre responsabilité de consulter régulièrement ces règles pour rester informé des éventuelles modifications.</p>
                </div>

                <div>
                    <h5>10. Contact</h5>
                    <p>Pour toute question ou clarification concernant ces règles et normes de conduite, veuillez nous contacter à [adresse e-mail de contact].</p>
                </div>

                <div>
                    <p>En utilisant notre plateforme, vous reconnaissez avoir lu, compris et accepté les présentes règles et normes de conduite. Merci de votre coopération et bonne utilisation de notre service d'assistance scolaire en ligne !</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
