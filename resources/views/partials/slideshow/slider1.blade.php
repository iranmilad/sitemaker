<section class="slideshow slideshow-wrapper" dir="ltr">
    <div class="container container-1330">
        <div class="home-slideshow slick-arrow-dots circle-dots">
            @foreach($sliders as $slider)
                @foreach($slider->images as $image)
                <div class="slide">
                    <div class="slideshow-wrap">
                        <picture>
                            <source media="(max-width:767px)"
                                srcset="{{ asset($image->image) }}" width="1150"
                                height="704">

                            <img class="blur-up lazyload"
                                src="{{ asset($image->image) }}" alt="slideshow"
                                title="" width="1320" height="704" />
                        </picture>
                        <div class="slideshow-content slideshow-overlay {{ $image->class }}">
                            <div class="slideshow-content-in">
                                <div class="wrap-caption animation style1">
                                    <h2 class="ss-mega-title text-black">{{ $image->title }}</h2>
                                    <p class="ss-sub-title text-black xs-hide"> {{ $image->caption }}</p>
                                    <div class="ss-btnWrap">
                                        <a class="btn btn-primary" href="{{ $image->link }}"> {{ $image->alt }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach

        </div>
    </div>
</section>
