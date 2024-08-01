<div class="wrapper">
    <section class="section-one">
        <div class="section-top">
            <h1>Foire aux questions</h1>
            <p>Découvrez comment vous abonner à l’académie des élites, trouver un professeur et réserver des cours pour votre enfant.</p>
        </div>

        <div class="faq">
            <div class="faq-content">
                @foreach ($faqs as $faq)
                    <div class="faq-group">
                        <div class="faq-group-header">
                            <h3 class="text-md">
                                {{ $faq->title }}
                            </h3>
                            <i class="fas fa-minus"></i>
                        </div>
                        <div class="faq-group-body open">
                            {!! $faq->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
