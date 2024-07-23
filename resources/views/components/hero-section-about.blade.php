<div class="hero-section-about">
    <div class="right-about">
        <img src="images/about-2.png" alt="hero-image" class="about-2">
        <img src="images/about-3.png" alt="hero-image" class="about-3">
    </div>
    <div class="left-about">
        @foreach ($abouts as $about)
            <h1>
                {{ $about->title }}
            </h1>
            <div>
                {!! $about->description !!}
            </div>
        @endforeach

    </div>
</div>
