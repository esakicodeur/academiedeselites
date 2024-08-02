@extends('layouts.default', ['title' => 'A propos'])

@section('content')
<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Equipe de direction</h1>
            <p>Notre équipe de direction est déterminée à révolutionner l’éducation telle que nous la connaissons.</p>
        </div>

        <div class="equipe">
            <div class="person">
                <div class="person-img">
                    <img src="{{ asset('images/person-1.png') }}" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>MENBRE D'EQUIPE</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="{{ asset('images/person-2.png') }}" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>MENBRE D'EQUIPE</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="{{ asset('images/person-1.png') }}" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>MENBRE D'EQUIPE</p>
                </div>
            </div>
            <div class="person">
                <div class="person-img">
                    <img src="{{ asset('images/person-2.png') }}" alt="">
                </div>
                <div class="person-content">
                    <h2>Felix Ohswald</h2>
                    <p>MENBRE D'EQUIPE</p>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layouts.partials._faq')
@endsection
