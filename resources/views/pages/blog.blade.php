@extends('layouts.default', ['title' => 'Blog'])

@section('content')
<div class="wrapper">
    <div class="section-blog">
        <div class="bg-light p-5 mb-5 text-center">
            <form action="" method="GET" class="container d-flex gap-2">
                <p class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" name="title" placeholder="Recherche..." value="{{ $input['title'] ?? '' }}">
                    <button class="btn btn-primary btn-sm flex-grow-0">
                        Rechercher
                    </button>
                </p>

            </form>
        </div>

        <div class="posts">
            @forelse ($posts as $post)
                @include('post.card')
            @empty
                <h2 class="bg-light p-5 mb-5 text-center">
                    Aucun article ne correspond à cette recherche.
                </h2>
            @endforelse
        </div>
        {{ $posts->links() }}
    </div>
</div>

<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Nos livrets de mathématiques “ Pythagore ”</h1>
            <p>Découvrez comment vous abonner à l’académie des élites, trouver un professeur et réserver des cours pour votre enfant.</p>
        </div>

        <div class="livrets">
            <div class="livret">
                <img src="images/6eme.png" alt="">
            </div>
            <div class="livret">
                <img src="images/5eme.png" alt="">
            </div>
            <div class="livret">
                <img src="images/4eme.png" alt="">
            </div>
            <div class="livret">
                <img src="images/3eme.png" alt="">
            </div>
            <div class="livret">
                <img src="images/2ndeA.png" alt="">
            </div>
            <div class="livret">
                <img src="images/2ndeC.png" alt="">
            </div>
            <div class="livret">
                <img src="images/1ereA.png" alt="">
            </div>
            <div class="livret">
                <img src="images/1ereD.png" alt="">
            </div>
            <div class="livret">
                <img src="images/1ereC.png" alt="">
            </div>
            <div class="livret">
                <img src="images/TleA.png" alt="">
            </div>
            <div class="livret">
                <img src="images/TleD.png" alt="">
            </div>
            <div class="livret">
                <img src="images/TleC.png" alt="">
            </div>
        </div>
    </section>
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
