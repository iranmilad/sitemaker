<div>
    <!-- resources/views/livewire/blog.blade.php -->
    @if (isset($options['type']) && $options['type'] === 'simple')

        <section class="section home-blog-post pb-0">
            <div class="container container-1330">
                <div class="section-header">

                    <h2>{{ $options['title'] }}</h2>
                </div>

                <div class="blog-slider-3items gp15 arwOut5 hov-arrow text-center" dir="ltr">
                    @foreach($posts as $post)
                    <div class="blog-item">
                        <div class="blog-article zoomscal-hov">
                            <div class="blog-img">
                                <a class="featured-image zoom-scal" href="{{ $post->link }}"><img
                                        class="blur-up lazyload"
                                        data-src="{{ asset($post->image) }}"
                                        src="{{ asset($post->image) }}"
                                        alt="مجموعه فروشگاهی جدید فروشگاه ما" width="740" height="410" /></a>
                            </div>
                            <div class="blog-content">
                                <h2 class="h4"><a href="{{ $post->link }}"> {{ $post->title }} </a></h2>
                                <ul class="publish-detail d-flex-wrap justify-content-center mb-3">
                                    <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1"> ارسال شده
                                            توسط:</span> {{ $post->user->fullName }}</li>
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="{{$post->created_at}}">{{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}</time></li>
                                    <li><i class="icon anm anm-comments-l"></i> <a href="#">{{count($post->comments)}} نظر</a></li>
                                </ul>
                                <a href="{{ $post->link }}" class="btn btn-outline-secondary btn-md">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>

    @elseif (isset($options['type']) && $options['type'] === 'mosaic')

        <div class="tw-text-center mb-5">
            <h4>{{ $options['title'] }}</h4>
        </div>
        <div class="blogGrid">
                    <a href="{{ $posts[0]->link  }}" class="biggrid">
                        <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                            <img class="tw-z-10 tw-relative tw-block tw-object-cover tw-h-full tw-w-full" src="{{ asset($posts[0]->image) }}" />
                            <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[0]->category->name  ?? 'بدون دسته بندی' }}</div>
                            </div>
                            <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                <h6 class="tw-leading-relaxed">{{ $posts[0]->title  }}</h6>
                            </div>
                        </div>
                    </a>

                    <a href="{{ $posts[1]->link  }}" class="smallgrid1 blogbiggrid">
                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[1]->category->name  ?? 'بدون دسته بندی' }}</div>
                        </div>
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[1]->image) }}" alt="">
                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                            <h6 class="tw-leading-relaxed">{{ $posts[1]->title  }}</h6>
                        </div>
                    </a>


                    <div class="smallgrid">
                        <div class="row md:tw-h-full gx-3 gy-2">

                                <a href="{{ $posts[2]->link  }}" class="col-md-6 tw-h-full">
                                    <div class="smallgrid2 blogbiggrid">
                                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[2]->category->name  ?? 'بدون دسته بندی' }}</div>
                                        </div>
                                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[2]->image) }}" alt="">
                                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                            <h6 class="tw-leading-relaxed">{{ $posts[2]->title  }}</h6>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ $posts[3]->link  }}" class="col-md-6 tw-h-full">
                                    <div class="smallgrid3 blogbiggrid">
                                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[3]->category->name  ?? 'بدون دسته بندی' }}</div>
                                        </div>
                                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[3]->image) }}" alt="">
                                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                            <h6 class="tw-leading-relaxed">{{ $posts[3]->title  }}</h6>
                                        </div>
                                    </div>
                                </a>

                        </div>
                    </div>







        </div>
    @elseif (isset($options['type']) && $options['type'] === 'list')
        <div class="widget-title">
            <h2>{{ $options['title'] }}</h2>
        </div>
        <div class="widget-content">
            <div class="list list-sidebar-products">
                @foreach($posts as $post)
                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                    <div class="mini-image"><a class="item-link" href="{{ $post->link }}"><img
                                class="featured-image blur-up lazyload"
                                data-src="{{ asset($post->image) }}"
                                src="{{ asset($post->image) }}"
                                alt="{{ $post->title }}" width="100" height="100" /> </a></div>
                    <div class="me-3 details">
                        <a class="item-title" href="{{ $post->link }}">{{ $post->title }}</a>
                        <div class="item-meta opacity-75"><time datetime="{{$post->created_at}}">{{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}</time></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    @endif

</div>



