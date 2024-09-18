<div>
    <!--    Categories:start-->
    @if (isset($options['type']) && $options['type'] === 'portfolio')

        <section class="section collection-banners">
            <div class="container container-1330">


                <div class="section-header">
                    <h2>{{ $menus->title }}</h2>
                </div>

                <div class="collection-banner-grid">
                    <div class="row sp-row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[0]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[0]->icon }}"
                                            src="{{ $menus->childMenus[0]->icon }}"
                                            alt = "" title="" width="645" height="245" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[0]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[1]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[1]->icon }}"
                                            src="{{ $menus->childMenus[1]->icon }}"
                                            alt="collection " title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[1]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[2]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[2]->icon }}"
                                            src="{{ $menus->childMenus[2]->icon }}"
                                            alt = "" title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[2]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[3]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[3]->icon }}"
                                            src="{{ $menus->childMenus[3]->icon }}"
                                            alt = "" title="" width="645" height="246" />
                                    </div>
                                    <div class="details middle-left">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[3]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[4]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[4]->icon }}"
                                            src="{{ $menus->childMenus[4]->icon }}"
                                            alt = "" title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[4]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[5]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[5]->icon }}"
                                            src="{{ $menus->childMenus[5]->icon }}"
                                            alt = "" title="" width="645" height="246" />
                                    </div>
                                    <div class="details middle-left">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[5]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[6]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[6]->icon }}"
                                            src="{{ $menus->childMenus[6]->icon }}"
                                            alt = "" title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[6]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="{{ $menus->childMenus[7]->link  }}" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ $menus->childMenus[7]->icon }}"
                                            src="{{ $menus->childMenus[7]->icon }}"
                                            alt = "" title="" width="645" height="246" />
                                    </div>
                                    <div class="details middle-left">
                                        <div class="inner">
                                            <span class="text">{{ $menus->childMenus[7]->title  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="view-collection text-center mt-4 mt-md-5">
                    <a href="/category" class="btn btn-primary btn-lg">مرور همه</a>
                </div>
            </div>
        </section>


    @elseif (isset($options['type']) && $options['type'] === 'features_menu')
        <div class="brands-list">
            <div class="brands-row logo-bar logo-slider-6items gp10 arwOut5 hov-arrow" dir="ltr">
                @foreach ($menus->childMenus  as $menu)
                    <div class="brands-logo">
                        <a href="{{  $menu->link  }}" class="zoom-scal zoom-scal-nopb">
                            <img class="blur-up lazyload" src="{{  $menu->icon  }}" alt="{{ $menu->title }}" title="{{ $menu->title }}"  width="80" height="80" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    @elseif (isset($options['type']) && $options['type'] === 'menu_category')
        @if ($menus)
            <div class="collection-slider-6items gp10 slick-arrow-dots sub-collection section pt-0" dir="ltr">
                @foreach ($menus->childMenus  as $menu)
                        <div class="category-item zoomscal-hov">
                            <a href="{{ $menu->link }}" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="{{  $menu->icon  }}"
                                        src="{{  $menu->icon  }}" alt="Men's"
                                        title="مردانه" width="365" height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">{{ $menu->title }}</h4>
                                </div>
                            </a>
                        </div>
                @endforeach
            </div>
        @endif



    @endif
    <!--    Categories:end-->

</div>
