<header class="header classicHeader d-flex align-items-center header-4 header-fixed">
    <div class="container-fluid">
        <div class="row">
            <!--Menu-->
            <x-desktop-menu :alias="'main_menu'" style="4" />
            {{-- <div class="col-1 col-sm-1 col-md-1 col-lg-5 align-self-center d-menu-col hdr-menu-left menu-position-left">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium left">
                        <li class="lvl1 parent dropdown"><a href="#">صفحه اصلی <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="/home" class="site-nav lvl-2">صفحه اصلی 01 - مد</a></li>
                                <li><a href="index2-footwear.html" class="site-nav lvl-2">صفحه اصلی 02 - کفش</a></li>
                                <li><a href="index3-bags.html" class="site-nav lvl-2">صفحه اصلی 03 - کیف</a></li>
                                <li><a href="index4-electronic.html" class="site-nav lvl-2">صفحه اصلی 04 - الکترونیک</a></li>
                                <li><a href="index5-tools-parts.html" class="site-nav lvl-2">صفحه اصلی 05 - ابزار و   قطعات</a></li>
                                <li><a href="index6-jewelry.html" class="site-nav lvl-2">صفحه اصلی 06 - جواهرات</a></li>
                                <li><a href="index7-organic-food.html" class="site-nav lvl-2">صفحه اصلی 07 - غذای ارگانیک</a></li>
                                <li><a href="index8-cosmetics.html" class="site-nav lvl-2">خانه  08 - لوازم آرایشی</a></li>
                                <li><a href="index9-furniture.html" class="site-nav lvl-2">خانه 09 - مبلمان</a></li>
                                <li><a href="index10-sunglasses.html" class="site-nav lvl-2">خانه 10 - عینک آفتابی</a></li>
                            </ul>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">خرید <i class="icon anm anm-angle-down-l"></i></a>
                            <div class="megamenu style1">
                                <ul class="row grid--uniform mmWrapper">
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">صفحه مجموعه</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="collection-style1.html" class="site-nav lvl-2">سبک مجموعه1</a></li>
                                            <li class="lvl-2"><a href="collection-style2.html" class="site-nav lvl-2">سبک مجموعه2</a></li>
                                            <li class="lvl-2"><a href="collection-style3.html" class="site-nav lvl-2">سبک مجموعه3</a></li>
                                            <li class="lvl-2"><a href="collection-style4.html" class="site-nav lvl-2">سبک مجموعه4</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style1.html" class="site-nav lvl-2">سبک مجموعه فرعی1</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style2.html" class="site-nav lvl-2">سبک مجموعه فرعی2</a></li>
                                            <li class="lvl-2"><a href="collection-empty.html" class="site-nav lvl-2">مجموعه خالی</a></li>
                                            <li class="lvl-2"><a href="shop-search-results.html" class="site-nav lvl-2">خرید نتایج جستجو</a></li>
                                            <li class="lvl-2"><a href="shop-swatches-style.html" class="site-nav lvl-2">فروش سبک نمونه</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">صفحه فروشگاه</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="shop-grid-view.html" class="site-nav lvl-2">نمایش شبکه فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-list-view.html" class="site-nav lvl-2">نمایش فهرست فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">خرید نوار کناری سمت چپ</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">خرید نوار کناری سمت چپ</a></li>
                                            <li class="lvl-2"><a href="shop-top-filter.html" class="site-nav lvl-2">فیلتر برتر فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-masonry-grid.html" class="site-nav lvl-2">خرید شبکه ماسونری</a></li>
                                            <li class="lvl-2"><a href="shop-with-category.html" class="site-nav lvl-2">خرید با دسته</a></li>
                                            <li class="lvl-2"><a href="shop-grid-view.html" class="site-nav lvl-2">صفحه بندی کلاسیک</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">پیمایش بی نهایت</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">خرید صفحه دیگر</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="{{ route('favorites') }}" class="site-nav lvl-2">سبک لیست علاقه مندی1</a></li>
                                            <li class="lvl-2"><a href="wishlist-style2.html" class="site-nav lvl-2">سبک لیست علاقه مندی 2</a></li>
                                            <li class="lvl-2"><a href="compare-style1.html" class="site-nav lvl-2">مقایسه سبک 1</a></li>
                                            <li class="lvl-2"><a href="compare-style2.html" class="site-nav lvl-2">مقایسه سبک 2</a></li>
                                            <li class="lvl-2"><a href="cart-style1.html" class="site-navlvl-2">سبک سبد خرید1</a></li>
                                            <li class="lvl-2"><a href="cart-style2.html" class="site-nav lvl-2">سبک سبد خرید 2</a></li>
                                            <li class="lvl-2"><a href="checkout-style1.html" class="site-nav lvl-2">سبک پرداخت1</a></li>
                                            <li class="lvl-2"><a href="checkout-style2.html" class="site-nav lvl-2">سبک پرداخت2</a></li>
                                            <li class="lvl-2"><a href="order-success.html" class="site-nav lvl-2">موفقیت سفارش</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-34 banner-col">
                                        <div class="banner-wrap">
                                            <a href="shop-left-sidebar.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/megamenu/demo4-banner-menu.jpg')}}" src="{{ asset('storage/images/megamenu/demo4-banner-menu.jpg')}}" alt="بنر" width="500" height="600" /></a>
                                            <div class="banner-content">
                                                <h4 class="body-font">تخفیفات داغ</h4>
                                                <h3> <br>پرطرفدار</h3> را از دست ندهید
                                                <div class="banner-btn"><a href="shop-left-sidebar.html" class="btn btn-primary btn-small">اکنون خرید کنید</a></div>
                                            </div>
                                            <div class="banner-discount">
                                                <h3 class="body-font"><span>50%</span> خاموش</h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div> --}}
            <!--End Menu-->
            <!--Logo-->
            <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                <a class="logoImg" href="/home">
                    <img class="mx-lg-auto default-logo" src="{{ $setting->settings['logo'] }}" alt="{{ $setting->settings['site_title'] }}" title="{{ $setting->settings['site_title'] }}" width="149" height="39" />
                    <span class="logo-txt d-none">هما</span>
                </a>
            </div>
            <!--End Logo-->
            <!--Right Icon-->
            <div class="col-8 col-sm-8 col-md-8 col-lg-5 align-self-center icons-col text-left">
                <!--Search-->
                <div class="search-parent iconset">
                    <div class="site-search" title="Search">
                        <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                    </div>
                    <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                        <div class="container">
                            <div class="search-header d-flex-center justify-content-between mb-3">
                                <h3 class="title m-0">به دنبال چه هستید؟</h3>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="search-body">
                                <form class="form minisearch" id="header-search" action="{{ route('search') }}" method="post">
                                    @csrf
                                    <!--فیلد جستجو-->
                                    <div class="d-flex searchField">
                                        <div class="search-category d-none">
                                            <select class="rgsearch-category rounded-end-0"  name="category">
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
                                            <input type="text" name="q" class="input-text border-start-0 border-end-0" placeholder="جستجوی محصولات..." value="" />
                                            <button type="submit" class="action search d-flex-justify-center btn btn-primary rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                        </div>
                                    </div>
                                    <!--پایان فیلد جستجو-->
                                    <!--جستجوی محبوب-->
                                    <div class="popular-searches d-flex-justify-center mt-3 d-none">
                                        <span class="title fw-600">در حال حاضر پرطرفدار:</span>
                                        <div class="d-flex-wrap searches-items">
                                            <a class="text-link me-2" href="#">دوربین</a>
                                            <a class="text-link me-2" href="#">لپ تاپ،</a>
                                            <a class="text-link me-2" href="#">الکترونیک</a>
                                        </div>
                                    </div>
                                    <!--پایان جستجوی محبوب-->
                                    <!--جستجوی محصولات-->
                                    <div class="search-products  d-none">
                                        <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                            <li class="item vala w-100 text-center text-muted d-none">شما هیچ موردی در جستجوی خود ندارید.</li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link" href="product-layout1.html">
                                                        <img class="blur-up lazyload" data-src="{{ asset('storage/images/products/electronic-product1-120x170.jpg')}}" src="{{ asset('storage/images/products/electronic-product1-120x170.jpg')}}" alt="تصویر" title="محصول" width="120" height="170" /></a></div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title" href="product-layout1.html">دوربین دیجیتال SLR</a></div>
                                                        <div class="product-price"><span class="old-price">114.00تومان  </span><span class="price">99.00تومان  </span></div>
                                                        <div class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-2">3 نظر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/electronic-product2-120x170.jpg')}}" src="{{ asset('storage/images/products/electronic-product2-120x170.jpg')}}" alt="تصویر" title="محصول" width="120" height="170" /> </a></div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title" href="product-layout1.html">دوربین فوری Instax</a></div>
                                                        <div class="product-price"><span class="price">128.00 تومان  </span></div>
                                                        <div class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                            <span class="caption hidden ms-2">9 نظر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/electronic-product3-120x170.jpg')}}" src="{{ asset('storage/images/products/electronic-product3-120x170.jpg')}}" alt="تصویر" title="محصول" width="120" height="170" /> </a></div>
                                                    <div class="me-3 details text-right">
                                                        <div class="product-name"><a class="item-title" href="product-layout1.html">دوربین بدون آینه EOS</a></div>
                                                        <div class="product-price"><span class="price">99.00 تومان  </span></div>
                                                        <div class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-2">30 نظر</span>
                                                        </div>
                                                    </div></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--پایان جستجوی محصولات-->
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <!--End Search-->
                <!--Account-->
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
                <!--End Account-->
                <!--Wishlist-->
                <div class="wishlist-link iconset" title="علاقه مندی"><a href="{{ route('favorites') }}"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count">5</span></a></div>
                <!--End Wishlist-->
                <!--Minicart-->
                <div class="header-cart iconset" title="سبدخرید">
                    <a href="#;" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas" data-bs-target="#minicart-drawer"><i class="hdr-icon icon anm anm-basket-l"></i><span class="cart-count  d-none">{{$cartCount}}</span></a>
                </div>
                <!--End Minicart-->
                <!--Mobile Toggle-->
                <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="منو"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                <!--End Mobile Toggle-->
            </div>
            <!--End Right Icon-->
        </div>
    </div>
</header>
