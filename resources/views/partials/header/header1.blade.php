<header class="header d-flex align-items-center header-1 header-fixed">
    <div class="container">
        <div class="row">
            <!--Logo-->
            <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                <a class="logoImg" href="/"><img src="{{ $setting->settings['logo'] }}"
                        alt="{{ $setting->settings['site_title'] }}" title="{{ $setting->settings['site_title'] }}" width="149" height="39" /></a>
            </div>
            <!--پایان لوگو-->
            <!--منو-->
            <x-desktop-menu :alias="'main_menu'" style="1" />
            <!--End Menu-->
            <!--نماد سمت راست-->
            <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-left">
                <!--جستجو-->
                <div class="search-parent iconset">
                    <div class="site-search" title="جستجو">
                        <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas"
                            data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                    </div>
                    <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                        <div class="container">
                            <div class="search-header d-flex-center justify-content-between mb-3">
                                <h3 class="title m-0">به دنبال چه هستید؟</h3>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="search-body">
                                <form class="form minisearch" id="header-search"  action="{{ route('search') }}" method="post">
                                    @csrf
                                    <!--فیلد جستجو-->
                                    <div class="d-flex searchField">
                                        <div class="search-category d-none">
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
                                            <input type="text" name="q" class="input-text border-start-0 border-end-0"
                                                placeholder="جستجوی محصولات..." value="" />
                                            <button type="submit"
                                                class="action search d-flex-justify-center btn rounded-start-0"><i
                                                    class="icon anm anm-search-l"></i></button>
                                        </div>
                                    </div>
                                    <!--پایان فیلد جستجو-->
                                    <!--جستجوی محبوب-->
                                    <div class="popular-searches d-flex-justify-center mt-3 d-none">
                                        <span class="title fw-600">در حال حاضر پرطرفدار:</span>
                                        <div class="d-flex-wrap searches-items">
                                            <a class="text-link me-2" href="#">تی شرت</a>
                                            <a class="text-link me-2" href="#">کفش</a>
                                            <a class="text-link me-2" href="#">کیف</a>
                                        </div>
                                    </div>
                                    <!--پایان جستجوی محبوب-->
                                    <!--جستجوی محصولات-->
                                    <div class="search-products d-none">
                                        <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                            <li class="item vala w-100 text-center text-muted d-none">شما هیچ موردی در
                                                جستجوی خود ندارید.</li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link"
                                                            href="product-layout1.html"><img class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                                        </div>
                                                        <div class="product-price"><span class="old-price">114.00
                                                                تومان </span><span class="price">99.00 تومان </span>
                                                        </div>
                                                        <div
                                                            class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star-o"></i><i
                                                                class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden me-2">3 نظر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link"
                                                            href="product-layout1.html"><img class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">درپوش کاف</a></div>
                                                        <div class="product-price"><span class="price">128.00 تومان
                                                            </span></div>
                                                        <div
                                                            class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i>
                                                            <span class="caption hidden me-2">9 نظر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link"
                                                            href="product-layout1.html"><img class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">پیراهن یقه فلانل</a></div>
                                                        <div class="product-price"><span class="price">99.00 تومان
                                                            </span></div>
                                                        <div
                                                            class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star-o"></i><span
                                                                class="caption hidden me-2">30 نظر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--پایان جستجوی محصولات-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--پایان جستجو-->
                <!--حساب-->
                <div class="account-parent iconset">
                    <div class="account-link" title="حساب"><i class="hdr-icon icon anm anm-user-al"></i></div>
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
                <!--پایان حساب-->
                <!--لیست آرزوها-->
                <div class="wishlist-link iconset" title="علاقه مندی ها"><a href="/favorites"><i
                            class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count d-none">0</span></a></div>
                <!--پایان فهرست آرزوها-->


                <!-- Minicart -->
                <div class="header-cart iconset" title="سبدخرید">
                    <a href="#" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas"  data-bs-target="#minicart">
                        <i class="hdr-icon icon anm anm-cart-l"></i>
                        <span class="cart-count">{{ $cartCount }}</span>
                    </a>
                </div>
                <!-- پایان Minicart -->



                <!--Mobile Toggle-->
                <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none"
                    title="منو"><i class="hdr-icon icon anm anm-times-l"></i><i
                        class="hdr-icon icon anm anm-bars-r"></i></button>
                <!--End Mobile Toggle-->
            </div>
            <!--End Right Icon-->
        </div>
    </div>
</header>
