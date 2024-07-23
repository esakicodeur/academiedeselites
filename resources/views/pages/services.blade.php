@extends('layouts.default', ['title' => 'Services'])

@section('content')
<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Autres services complementaires</h1>
            <p>Découvrez comment vous abonner à l’académie des élites, trouver un professeur et réserver des cours pour votre enfant.</p>
        </div>

        <div class="wrapper">
            <section class="section-one">
                <div class="section-down">
                    <div class="left">
                        <img src="{{ asset('images/service-img-3.png') }}" alt="mage-section">
                    </div>

                    <div class="right">
                        <p>Participer à notre manière à rendre l'éducation et l'instruction accessible à tous par la création d'une école virtuelle.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, totam fugiat. Autem suscipit culpa velit hic, minus aut veritatis est. Quo facilis repellat voluptate deleniti, earum dolor dicta velit incidunt!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, totam fugiat. Autem suscipit culpa velit hic, minus aut veritatis est. Quo facilis repellat voluptate deleniti, earum dolor dicta velit incidunt!</p>
                        <p>Participer à notre manière à rendre l'éducation et l'instruction accessible à tous par la création d'une école virtuelle.</p>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>


@include('layouts.partials._faq')
@endsection
