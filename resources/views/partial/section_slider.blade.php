    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            @if(!empty($section['grid_field']))
            @foreach($section['grid_field'] as $slider)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ $slider->slider_image[0]['permalink'] }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{ $slider['slider_title'] ?? '' }}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $slider['slider_content'] ?? '' }}</p>
                                @if(!empty($slider['slider_action']))
                                    <a href="{{ $slider['slider_action'] ?? '' }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Learn More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!-- Carousel End -->