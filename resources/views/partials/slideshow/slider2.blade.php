<section class="section collection-banners four-bnr py-0">
    <div class="container-fluid px-0">
        <div class="section-header d-none">
            <h2>کاوش مجموعه</h2>
        </div>
        <div class="collection-banner-grid">
            <div class="collection-banner-items collection-slider-4items slick-arrow-dots hov-arrow" dir="ltr">
                @foreach($sliders as $slider)
                    @foreach($slider->images as $image)
                    <div class="collection-item">
                        <a href="{{ $image->link }}" class="zoom-scal">
                            <div class="img">
                                <img class="blur-up lazyload w-100" data-src="{{ asset($image->image) }}" alt = "" title="" width="480" height="617" />
                            </div>
                            <div class="details middle-center p-lg-0">
                                <div class="inner">
                                    <span class="btn btn-light btn-lg text-capitalize head-font">{{ $image->title }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
</section>
