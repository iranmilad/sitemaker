<div>
    <h5>{{ $options['title'] }}</h5>
    <div class="row gx-4 gy-4 mt-1 tw-items-stretch">
        @if ($posts)
            <!--Blog Grid-->
            <div class="blog-grid-view grid-mr-20">
                <!--شبکه ماسونری-->
                <div class="grid-masonary">
                    <div class="grid-sizer col-12 col-sm-6 col-md-6 col-lg-4"></div>
                    <div class="row m-0">
                        @forelse ($posts as $post)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                                <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                    <div class="blog-img">
                                        <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                            href="{{ $post->link }}"><img class="rounded-0 rounded-bottom-0 blur-up lazyload "
                                                data-src="{{ asset($post->image) }}"
                                                src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                                width="740" height="410" /></a>
                                    </div>
                                    <div class="blog-content p-20">
                                        <h2 class="h3"><a href="{{ $post->link }}">{{ $post->title }}</a></h2>
                                        <ul class="publish-detail d-flex-wrap">
                                            <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                    توسط:</span> {{ $post->user->fullName }}</li>
                                            <li><i class="icon anm anm-clock-r"></i> <time datetime="{{$post->created_at}}">{{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}</time></li>
                                            <li><i class="icon anm anm-comments-l"></i> <a href="#">{{count($post->comments)}} نظر</a></li>
                                        </ul>
                                        <p class="content">{{ $post->short_description }}</p>
                                        <a href="{{ $post->link }}" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>مطلبی یافت نشد</div>
                        @endforelse

                    </div>
                </div>
            </div>
        @else
        <div>مطلبی یافت نشد</div>

        @endif
    </div>
    <div class="counter-a"></div>
    <div class="counter-a"></div>
    <div class="cs-pagination mt-5 tw-w-max tw-mx-auto">
        @if ($posts)
        {{ $posts->links() }}
        @endif
    </div>

    <!-- <nav class="cs-pagination mt-5 tw-w-max tw-mx-auto">
        <a href=""><i class="fa-solid fa-chevron-right"></i></a>
        <span>1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#" class="dots">...</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href=""><i class="fa-solid fa-chevron-left"></i></a>
    </nav> -->
</div>



