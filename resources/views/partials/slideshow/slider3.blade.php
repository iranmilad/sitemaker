<section class="slideshow slideshow-wrapper image-below-content-mobile">
    <div class="home-slideshow slick-arrow-dots circle-dots" dir="ltr">
        @foreach($sliders as $slider)
            @foreach($slider->images as $image)
                <div class="slide">
                    <div class="slideshow-wrap">
                        <picture>
                            <source media="(max-width:767px)" srcset="{{ asset($image->image) }}" width="1100" height="800">
                            <img class="blur-up lazyload" src="{{ asset($image->image) }}" alt="slideshow" title="" width="1920" height="800"/>
                        </picture>
                        <div class="container">
                            <div class="slideshow-content slideshow-overlay {{ $image->class }}">
                                <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style1">
                                        {{-- <p class="ss-small-title">دقت، کیفیت و طول عمر</p> --}}
                                        <h2 class="ss-mega-title">{{ $image->title }}</h2>
                                        <p class="ss-sub-title xs-hide text-large">{{ $image->caption }}</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary" href="{{ $image->link }}">{{ $image->alt }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</section>
