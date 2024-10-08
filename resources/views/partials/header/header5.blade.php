<header class="header mih-75 d-flex align-items-center header-5 header-fixed">
    <div class="container-fluid">
        <div class="row">
            <!--Logo-->
            <div class="logo col-4 col-sm-4 col-md-4 col-lg-1 col-xxl-1 align-self-center">
                <a class="logoImg" href="/home"><img src="{{ $setting->settings['logo'] }}"
                        alt="{{ $setting->settings['site_title'] }}" title="{{ $setting->settings['site_title'] }}" width="120" height="39" /></a>
            </div>
            <!--End Logo-->
            <!--منو-->
            {{-- <div class="col-1 col-sm-1 col-md-1 col-lg-6 col-xxl-6 align-self-center d-menu-col hdr-menu-left menu-position-left">
                <nav class="navigation ps-lg-4 pe-xl-3" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav middle left">
                        <li class="lvl1 parent dropdown"><a href="#">صفحه اصلی <i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="/home" class="site-nav lvl-2">صفحه اصلی 01 - مد</a></li>
                                <li><a href="index2-footwear.html" class="site-nav lvl-2">صفحه اصلی 02 - کفش</a></li>
                                <li><a href="index3-bags.html" class="site-nav lvl-2">صفحه اصلی 03 - کیف</a></li>
                                <li><a href="index4-electronic.html" class="site-nav lvl-2">صفحه اصلی 04 - الکترونیک</a>
                                </li>
                                <li><a href="index5-tools-parts.html" class="site-nav lvl-2">صفحه اصلی 05 - ابزار و
                                        قطعات</a></li>
                                <li><a href="index6-jewelry.html" class="site-nav lvl-2">صفحه اصلی 06 - جواهرات</a></li>
                                <li><a href="index7-organic-food.html" class="site-nav lvl-2">صفحه اصلی 07 - غذای
                                        ارگانیک</a></li>
                                <li><a href="index8-cosmetics.html" class="site-nav lvl-2">خانه 08 - لوازم آرایشی</a>
                                </li>
                                <li><a href="index9-furniture.html" class="site-nav lvl-2">خانه 09 - مبلمان</a></li>
                                <li><a href="index10-sunglasses.html" class="site-nav lvl-2">خانه 10 - عینک آفتابی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">خرید <i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <div class="megamenu style1">
                                <ul class="row grid--uniform mmWrapper">
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;"
                                            class="site-nav lvl-1 menu-title">صفحه مجموعه</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="collection-style1.html"
                                                    class="site-nav lvl-2">سبک مجموعه1</a></li>
                                            <li class="lvl-2"><a href="collection-style2.html"
                                                    class="site-nav lvl-2">سبک مجموعه2</a></li>
                                            <li class="lvl-2"><a href="collection-style3.html"
                                                    class="site-nav lvl-2">سبک مجموعه3</a></li>
                                            <li class="lvl-2"><a href="collection-style4.html"
                                                    class="site-nav lvl-2">سبک مجموعه4</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style1.html"
                                                    class="site-nav lvl-2">سبک مجموعه فرعی1</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style2.html"
                                                    class="site-nav lvl-2">سبک مجموعه فرعی2</a></li>
                                            <li class="lvl-2"><a href="collection-empty.html"
                                                    class="site-nav lvl-2">مجموعه خالی</a></li>
                                            <li class="lvl-2"><a href="shop-search-results.html"
                                                    class="site-nav lvl-2">خرید نتایج جستجو</a></li>
                                            <li class="lvl-2"><a href="shop-swatches-style.html"
                                                    class="site-nav lvl-2">فروش سبک نمونه</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;"
                                            class="site-nav lvl-1 menu-title">صفحه فروشگاه</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="shop-grid-view.html"
                                                    class="site-nav lvl-2">نمایش شبکه فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-list-view.html"
                                                    class="site-nav lvl-2">نمایش فهرست فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                    class="site-nav lvl-2">خرید نوار کناری سمت چپ</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                    class="site-nav lvl-2">خرید نوار کناری سمت چپ</a></li>
                                            <li class="lvl-2"><a href="shop-top-filter.html"
                                                    class="site-nav lvl-2">فیلتر برتر فروشگاه</a></li>
                                            <li class="lvl-2"><a href="shop-masonry-grid.html"
                                                    class="site-nav lvl-2">خرید شبکه ماسونری</a></li>
                                            <li class="lvl-2"><a href="shop-with-category.html"
                                                    class="site-nav lvl-2">خرید با دسته</a></li>
                                            <li class="lvl-2"><a href="shop-grid-view.html"
                                                    class="site-nav lvl-2">صفحه بندی کلاسیک</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                    class="site-nav lvl-2">پیمایش بی نهایت</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;"
                                            class="site-nav lvl-1 menu-title">خرید صفحه دیگر</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="{{ route('favorites') }}"
                                                    class="site-nav lvl-2">سبک لیست علاقه مندی1</a></li>
                                            <li class="lvl-2"><a href="wishlist-style2.html"
                                                    class="site-nav lvl-2">سبک لیست علاقه مندی 2</a></li>
                                            <li class="lvl-2"><a href="compare-style1.html"
                                                    class="site-nav lvl-2">مقایسه سبک 1</a></li>
                                            <li class="lvl-2"><a href="compare-style2.html"
                                                    class="site-nav lvl-2">مقایسه سبک 2</a></li>
                                            <li class="lvl-2"><a href="cart-style1.html" class="site-nav lvl-2">سبک
                                                    سبد خرید 1</a></li>
                                            <li class="lvl-2"><a href="cart-style2.html" class="site-nav lvl-2">سبک
                                                    سبد خرید 2</a></li>
                                            <li class="lvl-2"><a href="checkout-style1.html"
                                                    class="site-nav lvl-2">سبک پرداخت1</a></li>
                                            <li class="lvl-2"><a href="checkout-style2.html"
                                                    class="site-nav lvl-2">سبک پرداخت2</a></li>
                                            <li class="lvl-2"><a href="order-success.html"
                                                    class="site-nav lvl-2">موفقیت سفارش</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-34 banner-col">
                                        <div class="banner-wrap">
                                            <a href="shop-left-sidebar.html"><img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/megamenu/demo5-banner-menu.jpg') }}"
                                                    src="{{ asset('storage/images/megamenu/demo5-banner-menu.jpg') }}"
                                                    alt="بنر" width="500" height="600" /></a>
                                            <div class="banner-content">
                                                <h4>تخفیفات داغ</h4>
                                                <h3> <br>پرطرفدار</h3> را از دست ندهید
                                                <div class="banner-btn"><a href="shop-left-sidebar.html"
                                                        class="btn btn-primary btn-small">اکنون خرید کنید</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">محصول <i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <div class="megamenu style2">
                                <ul class="row mmWrapper">
                                    <li class="lvl-1 col-md-3 col-lg-3"><a href="#;"
                                            class="site-nav lvl-1 menu-title">صفحه محصول</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="product-layout1.html"
                                                    class="site-nav lvl-2">طرح بندی محصول1</a></li>
                                            <li class="lvl-2"><a href="product-layout2.html"
                                                    class="site-nav lvl-2">طرح بندی محصول 2</a></li>
                                            <li class="lvl-2"><a href="product-layout3.html"
                                                    class="site-nav lvl-2">طرح بندی محصول 3</a></li>
                                            <li class="lvl-2"><a href="product-layout4.html"
                                                    class="site-nav lvl-2">طرح بندی محصول 4</a></li>
                                            <li class="lvl-2"><a href="product-layout5.html"
                                                    class="site-nav lvl-2">طرح بندی محصول 5</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html"
                                                    class="site-nav lvl-2">طرح بندی محصول6</a></li>
                                            <li class="lvl-2"><a href="product-layout7.html"
                                                    class="site-nav lvl-2">طرح بندی محصول 7</a></li>
                                            <li class="lvl-2"><a href="product-3d-ar-models.html"
                                                    class="site-nav lvl-2">محصولات سه بعدی، مدل های واقعیت افزوده</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3"><a href="#;"
                                            class="site-nav lvl-1 menu-title">انواع صفحه محصول</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="product-standard.html"
                                                    class="site-nav lvl-2">محصول استاندارد</a></li>
                                            <li class="lvl-2"><a href="product-variable.html"
                                                    class="site-nav lvl-2">محصول متغیر</a></li>
                                            <li class="lvl-2"><a href="product-grouped.html"
                                                    class="site-nav lvl-2">محصول گروهی</a></li>
                                            <li class="lvl-2"><a href="product-layout4.html"
                                                    class="site-nav lvl-2">محصول در انبار موجود است</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html"
                                                    class="site-nav lvl-2">آکاردئون محصول</a></li>
                                            <li class="lvl-2"><a href="product-layout7.html"
                                                    class="site-nav lvl-2">برگه‌های محصول سمت چپ</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html"
                                                    class="site-nav lvl-2">دسته محصول</a></li>
                                            <li class="lvl-2"><a href="product-360-view.html"
                                                    class="site-nav lvl-2">نمایش محصول 360</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-6 product-col"><a href="#;"
                                            class="site-nav lvl-1 menu-title">پرفروش های هفتگی</a>
                                        <div class="grid-products weekly-product gp10 mt-1">
                                            <div class="item">
                                                <div class="product-wrap position-relative">
                                                    <!-- شروع تصویر محصول -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img
                                                                class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/tools1.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools1.jpg') }}"
                                                                alt="محصول" title="محصول" width="625"
                                                                height="781" /></a>
                                                        <div class="product-labels"><span
                                                                class="lbl on-sale">فروش</span></div>
                                                    </div>
                                                    <!-- تصویر محصول نهایی -->
                                                    <!-- شروع جزئیات محصول -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a href="product-layout1.html">ابزار
                                                                Plasterer</a></div>
                                                        <div class="product-price">
                                                            <span class="price old-price">114.00 تومان </span><span
                                                                class="price">99.00 تومان </span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-1">3 نظر</span>
                                                        </div>
                                                    </div>
                                                    <!-- جزئیات محصول نهایی -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-wrap position-relative"><!-- شروع تصویر محصول -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img
                                                                class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/tools2.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools2.jpg') }}"
                                                                alt="محصول" title="محصول" width="625"
                                                                height="781" /></a>
                                                    </div>
                                                    <!-- تصویر محصول نهایی -->
                                                    <!-- شروع جزئیات محصول -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a href="product-layout1.html">ابزار
                                                                چکش</a></div>
                                                        <div class="product-price">
                                                            <span class="price">165.00 تومان </span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i>
                                                            <span class="caption hidden ms-1">13 نظر</span>
                                                        </div>
                                                    </div>
                                                    <!-- جزئیات محصول نهایی -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-wrap position-relative">
                                                    <!-- شروع تصویر محصول -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img
                                                                class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/tools3.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools3.jpg') }}"
                                                                alt="محصول" title="محصول" width="625"
                                                                height="781" /></a>
                                                    </div>
                                                    <!-- تصویر محصول نهایی -->
                                                    <!-- شروع جزئیات محصول -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a href="product-layout1.html">ابزار
                                                                دستی هواپیما</a></div>
                                                        <div class="product-price">
                                                            <span class="price">153.00 تومان </span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star-o"></i><i
                                                                class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-1">17 نظر</span>
                                                        </div>
                                                    </div>
                                                    <!-- جزئیات محصول نهایی -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">صفحات <i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('contact-us') }}" class="site-nav">درباره ما <i
                                            class="icon anm anm-angle-left-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('contact-us') }}" class="site-nav">درباره ما سبک1</a></li>
                                        <li><a href="aboutus-style2.html" class="site-nav">درباره ما سبک2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-style1.html" class="site-nav">تماس با ما <i
                                            class="icon anm anm-angle-left-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="contact-style1.html" class="site-nav">تماس با ما سبک1</a></li>
                                        <li><a href="contact-style2.html" class="site-nav">تماس با ما سبک2</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('dashboard.home') }}" class="site-nav">حساب من <i
                                            class="icon anm anm-angle-left-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('dashboard.home') }}" class="site-nav">حساب من</a></li>
                                        <li><a href="{{ route('login') }}" class="site-nav">ورود به سیستم</a></li>
                                        <li><a href="{{ route('register') }}" class="site-nav">ثبت نام</a></li>
                                        <li><a href="forgot-password.html" class="site-nav">گذرواژه را فراموش
                                                کرده‌اید</a></li>
                                    </ul>
                                </li>
                                <li><a href="lookbook-grid.html" class="site-nav">کتاب نگاه <i
                                            class="icon anm anm-angle-left-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="lookbook-grid.html" class="site-nav">شبکه لوک بوک</a></li>
                                        <li><a href="lookbook-masonry.html" class="site-nav">ماسونری لوک بوک</a></li>
                                        <li><a href="lookbook-shop.html" class="site-nav">فروشگاه لوک بوک</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-page.html" class="site-nav">صفحه نمونه کارها</a></li>
                                <li><a href="faqs-page.html" class="site-nav">صفحه پرسش‌های متداول</a></li>
                                <li><a href="brands-page.html" class="site-nav">صفحه برندها</a></li>
                                <li><a href="cms-page.html" class="site-nav">صفحه CMS</a></li>
                                <li><a href="elements-icons.html" class="site-nav">ایکن ها</a></li>
                                <li><a href="error-404.html" class="site-nav">خطای 404</a></li>
                                <li><a href="coming-soon.html" class="site-nav">به زودی <span
                                            class="lbl nm_label2">جدید</span></a></li>
                            </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">وبلاگ <i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog-grid.html" class="site-nav">نمایش شبکه</a></li>
                                <li><a href="blog-list.html" class="site-nav">نمایش فهرست</a></li>
                                <li><a href="blog-grid-sidebar.html" class="site-nav">نوار کناری راست</a></li>
                                <li><a href="blog-list-sidebar.html" class="site-nav">نوار کناری سمت چپ</a></li>
                                <li><a href="blog-masonry.html" class="site-nav">شبکه ماسونری</a></li>
                                <li><a href="blog-details.html" class="site-nav">جزئیات وبلاگ</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> --}}
            <x-desktop-menu :alias="'main_menu'" style="5" />
            <!--End Menu-->
            <!--Right Icon-->
            <div class="col-8 col-sm-8 col-md-8 col-lg-5 col-xxl-5 align-self-center icons-col text-left">
                <!--Search-->
                <div class="search-parent iconset">
                    <!--Search Inline-->
                    <div class="minisearch-inline  d-lg-block">
                        <form class="form minisearch search-inline-brd" id="header-search0" action="{{ route('search') }}" method="post">
                            @csrf
                            <label class="label  d-none"><span>جستجو</span></label>
                            <!--فیلد جستجو-->
                            <div class="d-flex searchField">
                                <div class="search-category d-none">
                                    <select class="rgsearch-category border-0">
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
                                    <input type="text" name="q" class="form-control input-group-field search-input border-0"
                                        placeholder="در اینجا جستجو کنید..." value="" />
                                    <button type="submit" class="input-group-btn text-link search-submit border-0"><i
                                            class="hdr-icon icon anm anm-search-l"></i></button>
                                </div>
                            </div>
                            <!--پایان فیلد جستجو-->
                        </form>
                    </div>
                    <!--End Search Inline-->

                    <div class="site-search d-lg-none" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Search">
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
                                <form class="form minisearch" id="header-search" action="{{ route('search') }}" method="post">
                                    @csrf
                                    <!--فیلد جستجو-->
                                    <div class="d-flex searchField">
                                        <div class="search-category d-none">
                                            <select class="rgsearch-category rounded-end-0" name="category">
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
                                                class="action search d-flex-justify-center btn btn-primary rounded-start-0"><i
                                                    class="icon anm anm-search-l"></i></button>
                                        </div>
                                    </div>
                                    <!--پایان فیلد جستجو-->
                                    <!--جستجوی محبوب-->
                                    <div class="popular-searches d-flex-justify-center mt-3">
                                        <span class="title fw-600">در حال حاضر پرطرفدار:</span>
                                        <div class="d-flex-wrap searches-items">
                                            <a class="text-link me-2" href="#">چنگال‌ها،</a>
                                            <a class="text-link me-2" href="#">ابزارها</a>
                                            <a class="text-link me-2" href="#">قطعات</a>
                                        </div>
                                    </div>
                                    <!--پایان جستجوی محبوب-->
                                    <!--جستجوی محصولات-->
                                    <div class="search-products">
                                        <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                            <li class="item vala w-100 text-center text-muted d-none">شما هیچ موردی در
                                                جستجوی خود ندارید.</li>
                                            <li class="item">
                                                <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                    <div class="mini-image text-center"><a class="item-link"
                                                            href="product-layout1.html"><img class="blur-up lazyload"
                                                                data-src="{{ asset('storage/images/products/tools1-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools1-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="ms-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">ابزار Plasterer</a></div>
                                                        <div class="product-price"><span
                                                                class="old-price">114.00$</span><span
                                                                class="price">99.00$</span></div>
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
                                                                data-src="{{ asset('storage/images/products/tools2-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools2-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="ms-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">ابزار چکش</a></div>
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
                                                                data-src="{{ asset('storage/images/products/tools3-120x170.jpg') }}"
                                                                src="{{ asset('storage/images/products/tools3-120x170.jpg') }}"
                                                                alt="تصویر" title="محصول" width="120"
                                                                height="170" /></a> </div>
                                                    <div class="ms-3 details text-right">
                                                        <div class="product-name"><a class="item-title"
                                                                href="product-layout1.html">ابزار دستی هواپیما</a>
                                                        </div>
                                                        <div class="product-price"><span class="price">99.00 تومان
                                                            </span></div>
                                                        <div
                                                            class="product-review d-flex align-items-center justify-content-start">
                                                            <i class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star"></i><i
                                                                class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden me-2">30 نظر</span>
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
                <!--End Search-->
                <!--Setting-->
                <div class="setting-parent iconset d-none">
                    <div class="setting-link" title="Setting"><i class="hdr-icon icon anm anm-cog-l"></i></div>
                    <div id="settingsBox">
                        <div class="currency-picker mb-2">
                            <span class="ttl">ارز را انتخاب کنید</span>
                            <ul id="currencies" class="cnrLangList">
                                <li class="selected"><a href="#;" class="active">INR</a></li>
                                <li><a href="#;">GBP</a></li>
                                <li><a href="#;">CAD</a></li>
                                <li><a href="#;">USD</a></li>
                                <li><a href="#;">AUD</a></li>
                                <li><a href="#;">یورو</a></li>
                                <li><a href="#;">JPY</a></li>
                            </ul>
                        </div>
                        <div class="language-picker">
                            <span class="ttl">زبان را انتخاب کنید</span>
                            <ul id="language" class="cnrLangList">
                                <li><a href="#" class="active">انگلیسی</a></li>
                                <li><a href="#">فرانسوی</a></li>
                                <li><a href="#">آلمانی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Setting-->
                <!--Account-->
                <div class="account-parent iconset">
                    <div class="account-link" title="حساب"><i class="hdr-icon icon anm anm-user-al"></i></div>
                    <div id="accountBox">
                        <div class="customer-links">
                            <ul class="m-0">
                                <li><a href="{{ route('login') }}"><i class="icon anm anm-sign-in-al"></i>ورود به سیستم</a></li>
                                <li><a href="{{ route('register') }}"><i class="icon anm anm-user-al"></i>ثبت نام</a></li>
                                <li><a href="{{ route('dashboard.home') }}"><i class="icon anm anm-user-cil"></i>حساب من</a></li>
                                <li><a href="{{ route('favorites') }}"><i class="icon anm anm-heart-l"></i>لیست آرزوها</a>
                                </li>
                                {{-- <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>مقایسه</a></li> --}}
                                <li><a href="{{ route('logout') }}"><i class="icon anm anm-sign-out-al"></i>خروج از سیستم</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Account-->
                <!--Wishlist-->
                <div class="wishlist-link iconset" title="علاقه مندی"><a href="{{ route('favorites') }}"><i
                            class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count  d-none">5</span></a></div>
                <!--End Wishlist-->
                <!--Minicart-->
                <div class="header-cart iconset" title="سبدخرید">
                    <a href="#;" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas" data-bs-target="#minicart">
                        <i class="hdr-icon icon anm anm-cart-l"></i>
                        <span class="cart-count">{{$cartCount}}</span>
                    </a>
                </div>
                <!--End Minicart-->
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
