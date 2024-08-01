<div class="hero-section">
    <div class="left">
        @foreach ($heroes as $hero)
            <div>
                <h1>
                    {{ $hero->title }}
                </h1>

                <p>
                    {!! $hero->description !!}
                </p>
            </div>
        @endforeach


        <a href="{{ route('contact.create') }}" class="button pink enrol-icon"> <img src="images/PencilAlt.png" alt="">Nous contacter</a>
    </div>

    <div class="right">
        <img src="images/hero-image.png" alt="hero-image">
    </div>
</div>
