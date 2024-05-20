<div>
    <div class="spr-reviews">
        <h3 class="spr-form-title">نظرات مشتریان</h3>
        <div class="review-inner">
            @foreach ($reviews as $review)


                <div class="spr-review d-flex w-100">
                    <div class="spr-review-profile flex-shrink-0">
                        <img class="blur-up lazyload"
                            data-src="{{ asset('/images/users/User-Profile.png') }}"
                            src="{{ asset('/images/users/User-Profile.png') }}"
                            alt="" width="200" height="200" />
                    </div>
                    <div class="spr-review-content flex-grow-1">
                        <div class="d-flex justify-content-between flex-column mb-2">
                            <div
                                class="title-review d-flex align-items-center justify-content-between">
                                <h5 class="spr-review-header-title text-transform-none mb-0">{{ $review->name }}</h5>
                                <span class="product-review spr-starratings m-0">
                                    <span class="reviewLink" >
                                        @if($review->rating<=0)
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        @elseif($review->rating<=1)
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        @elseif($review->rating<=2)
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        @elseif($review->rating<=3)
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        @elseif($review->rating<=4)
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                        @elseif($review->rating<=5)
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                        @endif
                                    </span>
                                </span>
                            </div>
                        </div>
                        <b class="head-font">{!! $review->title !!}</b>
                        <p class="spr-review-body">{!! $review->text !!}</p>
                    </div>
                </div>

            @endforeach
        </div>


        <nav class="cs-pagination mt-5 tw-mx-auto tw-w-full tw-overflow-x-auto tw-justify-center">
            {{ $reviews->links() }}
        </nav>
    </div>

</div>

