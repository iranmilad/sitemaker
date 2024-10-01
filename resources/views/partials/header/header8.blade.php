<header class="header header-8 mb-lg-4">
    <!--Header inner-->
    <div class="header-main d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <!--Left Icon-->
                <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xxl-5 align-self-center icons-col text-right">
                    <!--Mobile Toggle-->
                    <button type="button" class="iconset ps-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Menu"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                    <!--End Mobile Toggle-->
                    <!--Search-->
                    <div class="search-parent iconset d-lg-none">
                        <div class="site-search" title="Search">
                            <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                        </div>
                        <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                            <div class="container">
                                <div class="search-header d-flex-center justify-content-between mb-3">
                                    <h3 class="title m-0"> به دنبال چه هستید؟</h3>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="search-body">
                                    <form class="form minisearch" id="header-search"  action="{{ route('search') }}" method="post">
                                        <!--Search Field-->
                                        <div class="d-flex searchField">
                                            <div class="search-category">
                                                <select class="rgsearch-category rounded-end-0">
                                                    <option value="0">همه دسته ها</option>
                                                    <option value="1">- همه</option>
                                                    <option value="2">- مد</option>
                                                    <option value="3">- کفش</option>
                                                    <option value="4">- الکترونیکی</option>
                                                    <option value="5">- جواهرات</option>
                                                    <option value="6">- سبزیجات</option>
                                                    <option value="7">- مبلمان</option>
                                                    <option value="8">- لوازم جانبی</option>
                                                </select>
                                            </div>
                                            <div class="input-box d-flex fl-1">
                                                <input type="text" class="input-text border-start-0 border-end-0" placeholder="جستجوی محصولات..." value="" />
                                                <button type="submit" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                            </div>
                                        </div>
                                        <!--پایان فیلد جستجو-->
                                        <!--جستجوی محبوب-->
                                        <div class="popular-searches d-flex-justify-center mt-3">
                                            <span class="title fw-600">در حال حاضر پرطرفدار:</span>
                                            <div class="d-flex-wrap searches-items">
                                                <a class="text-link me-2" href="#">مراقبت از پوست،</a>
                                                <a class="text-link me-2" href="#">آرایش،</a>
                                                <a class="text-link me-2" href="#">آرایشی</a>
                                            </div>
                                        </div>
                                        <!--End Search popular-->
                                        <!--Search products-->
                                        <div class="search-products">
                                            <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                                <li class="item vala w-100 text-center text-muted d-none">شما هیچ موردی در جستجوی خود ندارید.</li>
                                                <li class="item">
                                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                        <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/cosmetic-product1-120x170.jpg')}}" src="{{ asset('storage/images/products/cosmetic-product1-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /> </a></div>
                                                        <div class="ms-3 details text-right">
                                                            <div class="product-name"><a class="item-title" href="product-layout1.html">برس ریمل</a></div>
                                                            <div class="product-price"><span class="old-price">114.00$</span><span class="price">99.00$</span></div>
                                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                                <span class="caption hidden ms-2">3 نظر</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                        <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/cosmetic-product2-120x170.jpg')}}" src="{{ asset('storage/images/products/cosmetic-product2-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /> </a></div>
                                                        <div class="ms-3 details text-right">
                                                            <div class="product-name"><a class="item-title" href="product-layout1.html">آرایش گل دیتسی</a></div>
                                                            <div class="product-price"><span class="price">128.00 دلار</span></div>
                                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                                <span class="caption hidden ms-2">9 نظر</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                        <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/cosmetic-product3-120x170.jpg')}}" src="{{ asset('storage/images/products/cosmetic-product3-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /> </a></div>
                                                        <div class="ms-3 details text-right">
                                                            <div class="product-name"><a class="item-title" href="product-layout1.html">ابزار آرایشی و بهداشتی</a></div>
                                                            <div class="product-price"><span class="price">99.00 دلار</span></div>
                                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                                <span class="caption hidden ms-2">30 نظر</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Search products-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Search-->
                    <!--Search Inline-->
                    <div class="minisearch-inline d-none d-lg-block">
                        <form class="form minisearch" id="header-search0" action="{{ route('search') }}" method="post">
                            @csrf
                            <label class="label d-none"><span>جستجو کردن</span></label>
                            <!--Search Field-->
                            <div class="d-flex searchField">
                                <div class="input-box d-flex fl-1 position-relative">
                                    <input type="text" name="q" class="input-group-field input-text" placeholder="جستجوی محصول..." value="" />
                                    <button type="submit" class="input-group-btn action search d-flex-justify-center text-link"><i class="hdr-icon icon anm anm-search-l"></i></button>
                                </div>
                            </div>
                            <!--End Search Field-->
                        </form>
                    </div>
                    <!--End Search Inline-->
                    <!--Wishlist-->
                    <div class="wishlist-link iconset d-lg-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"><a href="{{ route('favorites') }}"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count">5</span></a></div>
                    <!--End Wishlist-->
                </div>
                <!--End Left Icon-->
                <!--Logo-->
                <div class="logo col-4 col-sm-4 col-md-2 col-lg-2 col-xxl-2 align-self-center text-center">
                    <a class="logoImg" href="/home"><img class="mx-auto" src="{{ $setting->settings['logo'] }}" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="39" /></a>
                </div>
                <!--End Logo-->
                <!--Right Icon-->
                <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xxl-5 align-self-center icons-col text-left">
                    <!--Setting-->
                    <div class="setting-parent iconset d-none">
                        <div class="setting-link" title="Setting"><i class="hdr-icon icon anm anm-cog-l"></i></div>
                        <div id="settingsBox">
                            <div class="currency-picker mb-2">
                                <span class="ttl">ارز را انتخاب کنید</span>
                                <ul id="currencies" class="cnrLangList">
                                    <li class="selected"><a href="#;" class="active">INR</a></li><li><a href="#;">GBP</a></li><li><a href="#;">CAD</a></li><li><a href="#;">USD</a></li><li><a href="#;">AUD</a></li><li><a href="#;">یورو</a></li><li><a href="#;">JPY</a></li>
                                </ul>
                            </div>
                            <div class="language-picker">
                                <span class="ttl">زبان را انتخاب کنید</span>
                                <ul id="language" class="cnrLangList">
                                    <li><a href="#" class="active">انگلیسی</a></li><li><a href="#">فرانسوی</a></li><li><a href="#">آلمانی</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Setting-->
                    <!--Account-->
                    <div class="account-parent iconset">
                        <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al"></i></div>
                        <div id="accountBox">
                            <div class="customer-links">
                                <ul class="m-0">
                                    <li><a href="{{ route('login') }}"><i class="icon anm anm-sign-in-al"></i>ورود به سیستم</a></li>
                                    <li><a href="{{ route('register') }}"><i class="icon anm anm-user-al"></i>ثبت نام</a></li>
                                    <li><a href="{{ route('dashboard.home') }}"><i class="icon anm anm-user-cil"></i>حساب من</a></li>
                                    <li><a href="{{ route('favorites') }}"><i class="icon anm anm-heart-l"></i>لیست آرزوها</a></li>
                                    {{-- <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>مقایسه</a></li> --}}
                                    <li><a href="{{ route('logout') }}"><i class="icon anm anm-sign-out-al"></i>خروج از سیستم</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Account-->
                    <!--Wishlist-->
                    <div class="wishlist-link iconset d-none d-lg-inline-flex" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"><a href="{{ route('favorites') }}"><i class="hdr-icon icon anm anm-heart-l"></i>
                        <span class="wishlist-count d-none">5</span></a></div>
                    <!--End Wishlist-->
                    <!--Minicart-->
                    <div class="header-cart iconset" title="Cart">
                        <a href="#;" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas" data-bs-target="#minicart"><i class="hdr-icon icon anm anm-cart-l"></i><span class="cart-count">{{$cartCount}}</span></a>
                    </div>
                    <!--End Minicart-->
                </div>
                <!--End Right Icon-->
            </div>
        </div>
    </div>
    <!--End Header inner-->
    <!--Navigation Desktop-->
    <div class="main-menu-outer d-none d-lg-block">
        <div class="container">
            <div class="menu-outer">
                <div class="row">
                    <x-desktop-menu :alias="'main_menu'" style="8" />
                </div>
            </div>
        </div>
    </div>
    <!--End Navigation Desktop-->
</header>
