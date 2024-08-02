@extends('layouts.default', ['title' => 'Services'])

@section('content')
<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Ce que nous vous proposons</h1>
            <p>Découvrez comment vous abonner à l’académie des élites, trouver un professeur et réserver des cours pour votre enfant.</p>
        </div>

        <div class="wrapper">
            <section class="section-one">
                <div class="section-down">
                    {{-- <img src="{{ asset('images/service-img-3.png') }}" alt="mage-section"> --}}

                    <div class="row">
                            <div class="card-ade-group col-md-6">
                                <div class="text-center card-ade">
                                    <h3>Pour les élèves du primaire et du sécondaire</h3>
                                    <p>Nos professeurs maitrisent les programmes, la pédagogie, les exigences de chaque gouvernement en matière d'éducation et sont prèts à accompagner les élèves tout au long de leur cursus scolaire.</p>
                                </div>

                                <div class="text-center card-ade">
                                    <h3>Des professeurs experimentés</h3>
                                    <p>Des cours de qualité, des séances de TDs animées par des experts pour la reprise de la confiance et l'obtention de meileures notes</p>
                                </div>
                            </div>

                            <div class="card-ade-group col-md-6">
                                <div class="text-center card-ade">
                                    <h3>Une plateforme d'enseignement innovante</h3>
                                    <p>Utiliser votre ordinateur de bureau ou votre appareil portable pour profiter des atouts de notre plateforme.</p>
                                </div>
                                <div class="text-center card-ade">
                                    <h3>Le bon professeur mène toujours à de bons résultats</h3>
                                    <p>Apprendre est unique à chacun : De son rythme et de son style d'apprentissage, nous choisissons des professeurs particuliers sur mesure.</p>
                                </div>
                            </div>
                    </div>

                </div>
            </section>
        </div>

    </section>
</div>


@include('layouts.partials._faq')
@endsection
