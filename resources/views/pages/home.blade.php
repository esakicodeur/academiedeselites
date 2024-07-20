@extends('layouts.default', ['title' => 'Acceuil'])

@section('content')
<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <div class="vision">
                Notre vision
            </div>
            <h1>Nous sommes convaincus que : " Seul on va vite mais ensemble on va plus loin ".</h1>
            <p>En mettant nos forces ensemble nous surmonterons toutes nos faiblesses.</p>
        </div>

        <div class="section-down">
            <div class="left">
                <img src="{{ asset('images/Image-section.png') }}" alt="mage-section">
            </div>
            <div class="left-mobile">
                <img src="{{ asset('images/Image-section-mobile.png') }}" alt="mage-section">
            </div>

            <div class="right">
                <div class="vision">
                    Notre mission
                </div>
                <h2>Faire preuve d'audace en apprenant autrement, en s'épanouissant et en se divertissant.</h2>
                <div class="vision">
                    Notre vision
                </div>
                <p>Participer à notre manière à rendre l'éducation et l'instruction accessible à tous par la création d'une école virtuelle.</p>
            </div>
        </div>

        <div class="section-top">
            <h1>Comment ça fonctionne ?</h1>
        </div>

        <div class="card-ade-group">
            <div class="card-ade">
                <h2>Exposez votre difficulté</h2>
                <p>Laissez-nous un message whatsApp en scannant le code QR ci-dessous, pour qu'on vous abonne à notre AETchat.</p>
                <div class="qr-code">
                    <img src="{{ asset('images/Slice 2.png') }}" alt="qr-code">
                </div>
            </div>
            <div class="card-ade">
                <h2>Réserver un cours personnalisé</h2>
                <p>Définissez les objectifs et donnez une orientation de votre parcours avec l'aide de notre conseiller pédagogique. Ensuite choisissez votre mode de suivi (en présentiel ou en ligne en vous connectant à notre classe virtuelle).</p>
            </div>
        </div>
    </section>
</div>

<div class="section-two">
    <div class="block-one">
        <h1>+100</h1>
        <p>professeurs particuliers</p>
    </div>
    <div class="block-one">
        <h1>30+</h1>
        <p>Matieres</p>
    </div>
    <div class="block-one">
        <h1>+200</h1>
        <p>familles accompagnées</p>
    </div>
    <div class="block-one">
        <h1>15</h1>
        <p>Villes</p>
    </div>
</div>

<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>A deux on apprend vite</h1>
        </div>

        <div class="section-down">
            <div class="right">
                <div class="card-ade-group apprend-vite">
                    <div class="card-ade">
                        <h2>AETchat : Pour répondre instantanément à vos questions et planifier une session de travail</h2>
                        <p>AETchat est un service de messagerie intégré à notre plateforme qui permet de transmettre sous forme de capture d'écran, le message vocal, le message texte l'exactitude de leurs difficultés à nos professeurs, d'assurez un suivi propre de chaque enfant à sa difficulté et d'enregistrer les conversations afin d'avoir une traçabilité sur l'évolution de l'apprenant et assurer la Programmation des cours.</p>
                    </div>
                    <div class="card-ade">
                        <h2>AEClass : Notre espace d'enseignement virtuel</h2>
                        <p>AEClass dispose de plusieurs outils collaboratifs : une plateforme d'audio conférence, de visioconférence enregistré pour permettre de reviser en cas besoin; le partage des documents pour faciliter la coordinnation et le tableau blanc numérique pour les cours interactifs.</p>
                    </div>
                </div>
            </div>

            <div class="left">
                <img src="{{ asset('images/Image-section-2.png') }}" alt="mage-section">
            </div>
            <div class="left-mobile left-mobile-2">
                <img src="{{ asset('images/Image-section-2-mobile.png') }}" alt="mage-section">
            </div>
        </div>

        <div class="section-top">
            <h1>Nos Services</h1>

            <div class="card-ade-group">
                <div class="card-service">
                    <h3>Aide à la résolution de vos exercices</h3>
                </div>
                <div class="card-service">
                    <h3>Cours particuliers à domicile</h3>
                </div>
                <div class="card-service">
                    <h3>Cours particuliers en ligne</h3>
                </div>
                <div class="card-service">
                    <h3>Cours en ligne en groupe</h3>
                </div>
                <div class="card-service">
                    <h3>Cours en groupe dans un centre</h3>
                </div>
                <div class="card-service">
                    <h3>Session intensive de rémédiations</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="section-three">
    <div class="section-top">
        <h1>Quelques disciplines dispensées</h1>
        <p>Mathématiques, Sciences, anglais et bien d’autres : nous proposons des cours dans plus de 20 disciplines.<p>
    </div>

    <div class="section-down">
        <div class="achievement-cards">
            <div class="achievement-card">
                <div class="content">
                    <p>Mathematiques</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>SVT</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Physique</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Anglais</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Chimie</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Informatique</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Histoire-Geo</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Allemand</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Espagnol</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Français</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Philosophie</p>
                </div>
            </div>
            <div class="achievement-card">
                <div class="content">
                    <p>Programmation</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Foire aux questions</h1>
            <p>Découvrez comment vous abonner à l’académie des élites, trouver un professeur et réserver des cours pour votre enfant.</p>
        </div>

        <div class="faq">
            <div class="faq-content">
                <div class="faq-group">
                    <div class="faq-group-header">
                        <h3 class="text-md">
                            AcademieDesElites, c’est quoi ?
                        </h3>
                        <i class="fas fa-minus"></i>
                    </div>
                    <div class="faq-group-body open">
                        AcademieDesElites est le futur des cours particuliers et de l'assistance scolaire. Nous mettons à la disposition de nos élèves toutes les ressources pédagogiques et les outils pédagogiques (plateformes AETchat et AEClass) innovants les permettant d'atteindre leurs objectifs.
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h3 class="text-md">
                            A qui s’adresse l’offre de AcademieDesElites ?
                        </h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        L’offre s’adresse aux élèves et aux étudiants de tous les âges qui ont besoin d’aide pour apprendre ou qui veulent développer leurs connaissances avec notre soutien.
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h3 class="text-md">
                            Quelles sont les avantages de notre solution ?
                        </h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <ul>
                            <li>
                                Suivi en temps réel sur toutes les disciplines et sur tous les niveaux d'étude.
                            </li>
                            <li>
                                Les cours PDF, les quiz, les audios, les vidéos, les fiches de TD bien élaborées, les sujets type séquentiels et d'examens disponibles pour nos apprenants.
                            </li>
                            <li>
                                Consultation gratuite avec un de nos conseillers pédagogiques pour établir la situation scolaire et psychologique de l'apprenant et lui affecter le meilleur professeur.
                            </li>
                            <li>
                                Des conférences en ligne.
                            </li>
                            <li>
                                La formation des parents (conseils de nos experts).
                            </li>
                            <li>
                                La première semaine de soutien est gratuite.
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h3 class="text-md">
                            Comment puis-je organiser une leçon avec un.e professeur.e ?
                        </h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        Pour organiser un suivi et une première leçon avec un.e professeur.e merci de contacter la ligne de support pédagogique AcademieDesElites, un.e de nos coéquipier.ère.s vous répondra dans les meilleurs délais. Pour une demande d’un. professeur.e dans une nouvelle matière merci de contacter le support pédagogique par message whatsApp à ce numéro : +237 676 546 499
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
