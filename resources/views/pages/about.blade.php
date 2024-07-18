@extends('layouts.default', ['title' => 'A propos'])

@section('content')
<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Fondateurs et équipe de direction</h1>
            <p>Nos fondateurs et notre équipe de direction sont déterminés à révolutionner l’éducation telle que nous la connaissons.</p>
        </div>

        <div class="equipe">
            <div class="person">
                <div class="person-img">
                    <img src="images/person-1.png" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>COFONDATEUR ET PDG</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="images/person-2.png" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>COFONDATEUR ET PDG</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="images/person-1.png" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>COFONDATEUR ET PDG</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="images/person-2.png" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>COFONDATEUR ET PDG</p>
                </div>
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
