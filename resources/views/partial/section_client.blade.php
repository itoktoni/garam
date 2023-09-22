    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h1 class="mb-0">{{ $section->client_title }}</h1>
                <h6 class="text-secondary text-uppercase">{{ $section->client_description }}</h6>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @if(!empty($section['client_card']))
                @foreach($section['client_card'] as $card)
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="{{ $card->client_image[0]['permalink'] }}" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">{{ $card->client_title }}</h5>
                            <p class="m-0">{{ $card->client_description }}</p>
                        </div>
                    </div>
                    <p class="mb-0">{{ $card->client_content }}</p>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
    <!-- Testimonial End -->