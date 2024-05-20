@extends('layouts.app')
@section('title', 'نتایج جستجو')
@section('body', 'shop-page shop-search-results-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>خرید نتایج جستجو</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <span class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه
                                اصلی</a><span class="title"><i
                                    class="icon anm anm-angle-left-l"></i>خرید</span><span class="main-title"><i
                                    class="icon anm anm-angle-left-l"></i>خرید نتایج جستجو</span> </span>
                    </div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Search Form -->
        <div class="search-results-form mb-4 pb-4 mb-lg-5 pb-lg-5 border-bottom">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="page-title text-center mb-3">
                        <h2 class="mb-2">نتایج برای "لباس زنانه"</h2>
                        <p>15 نتیجه برای "لباس زنانه"</p> پیدا شد
                    </div>
                    <!--Search form-->
                    <form action="#" class="searchForm">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو کردن..." required />
                            <button class="btn btn-primary" type="submit">جستجو کردن</button>
                        </div>
                    </form>
                    <!--End Search form-->
                    <!--Search popular-->
                    <div class="popular-searches d-flex-justify-center mt-3">
                        <span class="title fw-600">جستجوهای پرطرفدار:</span>
                        <div class="d-flex-wrap searches-items">
                            <a class="text-link me-2" href="#">تی شرت،</a>
                            <a class="text-link me-2" href="#">کفش،</a>
                            <a class="text-link me-2" href="#">کیف</a>
                        </div>
                    </div>
                    <!--End Search popular-->
                </div>
            </div>
        </div>
        <!-- End Search Form -->

        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                <div class="closeFilter d-block d-lg-none"><i class="icon anm anm-times-r"></i></div>
                <div class="sidebar-tags sidebar-sticky clearfix">
                    <!--Filter By-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>فیلتر بر اساس</h2>
                        </div>
                        <div class="widget-content filterby filterDD">
                            <ul class="items tags-list d-flex-wrap">
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">زنان</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">آبی</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">XL</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                            </ul>
                            <a href="#;" class="btn btn-sm brd-link">پاک کردن همه</a>
                        </div>
                    </div>
                    <!--End Filter By-->
                    <!--Categories-->
                    <div class="sidebar-widget clearfix categories filterBox filter-widget">
                        <div class="widget-title">
                            <h2>دسته بندی ها</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="sidebar-categories scrollspy morelist clearfix">
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">تن پوش</a>
                                    <ul class="sublinks">
                                        <li class="lvl2-sub-level sub-sub-level"><a href="#;"
                                                class="site-nav">مردان</a>
                                            <ul class="sublinks">
                                                <li class="lvl3"><a href="#" class="site-nav">پیراهن <span
                                                            class="count">(25)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">شلوار جین <span
                                                            class="count">(6)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">کفش <span
                                                            class="count">(9)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl2"><a href="#" class="site-nav">زنان <span
                                                    class="count">(14)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">کودک <span
                                                    class="count">(26)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">جواهرات</a>
                                    <ul class="sublinks">
                                        <li class="lvl2"><a href="#" class="site-nav">زنگ <span
                                                    class="count">(12)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">گردن <span
                                                    class="count">(15)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Eaarings <span
                                                    class="count">(18)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">لوازم جانبی <span
                                            class="count">(14)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">کفش <span
                                            class="count">(18)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">الکترونیک <span
                                            class="count">(22)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">آرایشی <span
                                            class="count">(27)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>قیمت</h2>
                        </div>
                        <form class="widget-content price-filter filterDD" action="#" method="post">
                            <div id="slider-range" class="mt-2"></div>
                            <div class="row">
                                <div class="col-6"><input id="amount" type="text" /></div>
                                <div class="col-6 text-right"><button class="btn btn-sm">فیلتر کنید</button></div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Color Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>رنگ</h2>
                        </div>
                        <div class="widget-content filter-color filterDD">
                            <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                                <li class="swatch large radius available active"><img
                                        src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر" width="70"
                                        height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="آبی" />
                                </li>
                                <li class="swatch large radius available"><img
                                        src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر" width="70"
                                        height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="مشکی" />
                                </li>
                                <li class="swatch large radius available"><img
                                        src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر" width="70"
                                        height="70" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="صورتی" /></li>
                                <li class="swatch large radius available"><img
                                        src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر" width="70"
                                        height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="قرمز" />
                                </li>
                                <li class="swatch large radius available black"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="مشکی"></span></li>
                                <li class="swatch large radius available red"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="قرمز"></span></li>
                                <li class="swatch large radius available blue"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="آبی"></span></li>
                                <li class="swatch large radius available pink"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="رنگ صورتی"></span>
                                </li>
                                <li class="swatch large radius available gray"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="خاکستری"></span>
                                </li>
                                <li class="swatch large radius available green"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="سبز"></span></li>
                                <li class="swatch large radius available orange"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="نارنجی"></span></li>
                                <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="زرد"></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Size Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>اندازه</h2>
                        </div>
                        <div class="widget-content filter-size filterDD">
                            <ul class="swacth-list size-swatches d-flex-center clearfix">
                                <li class="swatch large radius soldout"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                <li class="swatch large radius available active"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Product Brands-->
                    <div class="sidebar-widget filterBox filter-widget brand-filter">
                        <div class="widget-title">
                            <h2>برندها</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="avone" id="avone"><label
                                        for="avone"><span></span>آوون</label></li>
                                <li><input type="checkbox" value="diva" id="diva"><label
                                        for="diva"><span></span>دیوا</label></li>
                                <li><input type="checkbox" value="optimal" id="optimal"><label
                                        for="optimal"><span></span>بهینه</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Product Brands-->
                    <!--Product Tags-->
                    <div class="sidebar-widget filterBox filter-widget product-tag">
                        <div class="widget-title">
                            <h2>برچسب های محصول</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="tags-list product-tags d-flex-wrap clearfix">
                                <li class="item active"><a class="rounded-5" href="#">زنان</a></li>
                                <li class="item"><a class="rounded-5" href="#">کفش</a></li>
                                <li class="item"><a class="rounded-5" href="#">زیبایی</a></li>
                                <li class="item"><a class="rounded-5" href="#">لوازم جانبی</a></li>
                                <li class="item"><a class="rounded-5" href="#">100 هزار تا 400 هزار</a></li>
                                <li class="item"><a class="rounded-5" href="#">بالای 800 هزار</a></li>
                                <li class="item"><a class="rounded-5" href="#">سیاه</a></li>
                                <li class="item"><a class="rounded-5" href="#">آبی</a></li>
                                <li class="item"><a class="rounded-5" href="#">قرمز</a></li>
                                <li class="item"><a class="rounded-5" href="#">M</a></li>
                                <li class="item"><a class="rounded-5" href="#">XS</a></li>
                            </ul>
                            <span class="btn btn-sm brd-link btnview">مشاهده همه</span>
                        </div>
                    </div>
                    <!--End Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->

            <!--Products-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <!--Toolbar-->
                <div class="toolbar toolbar-wrapper shop-toolbar">
                    <div class="row align-items-center">
                        <div
                            class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                            <button type="button"
                                class="btn btn-filter icon anm anm-sliders-hr d-inline-flex d-lg-none ms-2"><span
                                    class="d-none">فیلتر کنید</span></button>
                            <div class="filters-item d-flex align-items-center">
                                <label class="mb-0 ms-2 d-none d-lg-inline-block">نمایش به صورت:</label>
                                <div class="grid-options view-mode d-flex">
                                    <a class="icon-mode mode-list d-block" data-col="1"></a>
                                    <a class="icon-mode mode-grid grid-2 d-block" data-col="2"></a>
                                    <a class="icon-mode mode-grid grid-3 d-md-block" data-col="3"></a>
                                    <a class="icon-mode mode-grid grid-4 d-lg-block active" data-col="4"></a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                            <span class="toolbar-product-count">نمایش: 15 محصول</span>
                        </div>
                        <div
                            class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                            <div class="filters-item d-flex align-items-center">
                                <label for="ShowBy" class="mb-0 ms-2 text-nowrap d-none d-sm-inline-flex">نمایش
                                    دهید:</label>
                                <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                                    <option value="title-ascending" selected="selected">10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                                <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">مرتب سازی بر اساس:</label>
                                <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                    <option value="featured" selected="selected">ویژه</option>
                                    <option value="best-selling">پرفروش ترین</option>
                                    <option value="title-ascending">بر اساس حروف الفبا، A-Z</option>
                                    <option value="title-descending">بر اساس حروف الفبا، Z-A</option>
                                    <option value="price-ascending">قیمت، کم به بالا</option>
                                    <option value="price-descending">قیمت، از بالا به پایین</option>
                                    <option value="created-ascending">تاریخ، قدیمی به جدید</option>
                                    <option value="created-descending">تاریخ، جدید به قدیمی</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Toolbar-->

                <!--Product Grid-->
                <div class="grid-products grid-view-items">
                    <div class="row col-row product-options row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0"><img
                                            class="rounded-0 blur-up lazyload"
                                            src="{{ asset('storage/images/products/product1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" /></a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl on-sale">فروش</span></div>
                                    <!-- End Product label -->
                                    <!--Countdown Timer-->
                                    <div class="saleTime" data-countdown="2025/01/01"></div>
                                    <!--End Countdown Timer-->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="فروشگاه سریع"><i class="icon anm anm-cart-l"></i><span
                                                    class="text">فروشگاه سریع</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">تاپ ها</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price old-price">114 هزار</span><span class="price">99
                                            هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">3 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="دریایی"><img
                                                    src="{{ asset('storage/images/products/product1.jpg')}}" alt="تصویر"
                                                    width="625" height="808"></span></li>
                                        <li class="swatch medium radius"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="سبز"><img
                                                    src="{{ asset('storage/images/products/product1-1.jpg')}}" alt="تصویر"
                                                    width="625" height="808"></span></li>
                                        <li class="swatch medium radius"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="خاکستری"><img src="{{ asset('storage/images/products/product1-2.jpg')}}"
                                                    alt="تصویر" width="625" height="808"></span></li>
                                        <li class="swatch medium radius"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="نارنجی"><img
                                                    src="{{ asset('storage/images/products/product1-3.jpg')}}" alt="تصویر"
                                                    width="625" height="808"></span></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#quickshop-modal"
                                                    class="btn btn-md quick-shop quick-shop-modal"
                                                    data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span
                                                        class="text">فروشگاه سریع</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product2.jpg')}}"
                                            src="{{ asset('storage/images/products/product2.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product2-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product2-1.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="گزینه مورد نظر را انتخاب کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">گزینه مورد
                                                    نظر را انتخاب کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">تن پوش</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">کلاهک کاف</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">128 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i>
                                        <span class="caption hidden ms-1">8 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="آبی" /></li>
                                        <li class="swatch medium radius"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="مارون" /></li>
                                        <li class="swatch medium radius"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="صورتی" /></li>
                                        <li class="swatch medium radius"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="سبز" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#quickshop-modal"
                                                    class="btn btn-md quick-shop quick-shop-modal"
                                                    data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">گزینه
                                                        مورد نظر را انتخاب کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product3.jpg')}}"
                                            src="{{ asset('storage/images/products/product3.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product3-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product3-1.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl pr-label3">پرطرفدار</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">کفش</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">پیراهن یقه فلانل</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">99 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">10 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius red"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="قرمز"></span></li>
                                        <li class="swatch medium radius orange"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="نارنجی"></span></li>
                                        <li class="swatch medium radius yellow"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="رنگ زرد"></span></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product4.jpg')}}"
                                            src="{{ asset('storage/images/products/product4.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product4-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product4-1.jpg')}}" alt="محصول"
                                            title="تولید - محصول" width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl on-sale">50 درصد تخفیف</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                    <!--Product Availability-->
                                    <div class="product-availability rounded-5">
                                        <div class="lh-1 d-flex justify-content-between">
                                            <div class="text-sold">فروخته شد:<strong
                                                    class="text-primary ms-1">34</strong></div>
                                            <div class="text-available">در دسترس:<strong
                                                    class="text-primary ms-1">16</strong></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--End Product Availability-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">عینک آفتابی</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">هودی کلاه دار نخی</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price old-price">198 هزار</span><span class="price">99
                                            هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">0 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius black"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="سیاه" /></li>
                                        <li class="swatch medium radius navy"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="دریایی" /></li>
                                        <li class="swatch medium radius darkgreen"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="سبز تیره" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product5.jpg')}}"
                                            src="{{ asset('storage/images/products/product5.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product5-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product5-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl pr-label2">جدید</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">روش</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">هودی های یقه دار</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">39 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">3 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius black"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="مشکی"></span></li>
                                        <li class="swatch medium radius maroon"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="maroon"></span></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product6.jpg')}}"
                                            src="{{ asset('storage/images/products/product6.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product6-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product6-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl on-sale">فروخته شده</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">کفش</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">کیف دافل تاشو</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">299 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">15 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius gray"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="gray"></span></li>
                                        <li class="swatch medium radius red"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span>
                                        </li>
                                        <li class="swatch medium radius orange"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="orange"></span></li>
                                        <li class="swatch medium radius yellow"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="زرد"></span>
                                        </li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-md add-to-cart-modal soldOutBtn disabled"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">تمام
                                                        شده</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product7.jpg')}}"
                                            src="{{ asset('storage/images/products/product7.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product7-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product7-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl pr-label1">کتاب پرفروش</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">کیف ها</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">شلوار کمر بلند</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">139 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">11 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius black"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="مشکی" /></li>
                                        <li class="swatch medium radius maroon"><img
                                                src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt="تصویر"
                                                width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="maroon" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product8.jpg')}}"
                                            src="{{ asset('storage/images/products/product8.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product8-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product8-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">الکترونیکی</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">کراوات باریک</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">134 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">0 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Variant -->
                                    <ul class="variants-clr swatches">
                                        <li class="swatch medium radius black"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="مشکی"></span></li>
                                        <li class="swatch medium radius navy"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="navy"></span></li>
                                        <li class="swatch medium radius darkgreen"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="darkgreen"></span></li>
                                    </ul>
                                    <!-- End Variant -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product9.jpg')}}"
                                            src="{{ asset('storage/images/products/product9.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product9-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product9-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl pr-label4">محبوب</span></div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">ابزار & قطعات</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">کت شیتر مردانه</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">99 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">19 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product10.jpg')}}"
                                            src="{{ asset('storage/images/products/product10.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product10-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product10-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">جواهر سازی</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">پیراهن خردل معمولی</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">167 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i>
                                        <span class="caption hidden ms-1">7 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product11.jpg')}}"
                                            src="{{ asset('storage/images/products/product11.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product11-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product11-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">شلوار جین</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">تی شرت آستین گرد</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">154 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">19 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product12.jpg')}}"
                                            src="{{ asset('storage/images/products/product12.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product12-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product12-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">تی شرت</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">کیف لپ تاپ کوله پشتی</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">121 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">6 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product13.jpg')}}"
                                            src="{{ asset('storage/images/products/product13.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product13-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product13-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">مردانه</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">تی شرت کژوال نخی</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">167 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">13 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product14.jpg')}}"
                                            src="{{ asset('storage/images/products/product14.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product14-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product14-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">کفش ورزشی</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">شلوار کژوال مچ پا</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">125 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">20 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product15.jpg')}}"
                                            src="{{ asset('storage/images/products/product15.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product15-1.jpg')}}"
                                            src="{{ asset('storage/images/products/product15-1.jpg')}}" alt="محصول" title="محصول"
                                            width="625" height="808" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="به سبد خرید اضافه کنید"><i
                                                    class="icon anm anm-cart-l"></i><span class="text">به سبد خرید
                                                    اضافه کنید</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="مشاهده سریع"><i class="icon anm anm-search-plus-l"></i><span
                                                    class="text">مشاهده سریع</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به لیست علاقه مندی ها"><i
                                                class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست
                                                علاقه مندی ها</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن برای مقایسه"><i class="icon anm anm-random-r"></i><span
                                                class="text">افزودن برای مقایسه</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-center">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">لباس پوشیدن</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">شلوار راسته</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">122 هزار</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!--Sort Description-->
                                    <p class="sort-desc hidden">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                        مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    <!--End Sort Description-->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">11 بررسی ها</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span class="text">به
                                                        سبد خرید اضافه کنید</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="clearfix pagination-bottom">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-right-l"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-left-l"></i></a></li>
                        </ul>
                    </nav><br>

                    <!-- End Pagination -->
                </div>
                <!--End Product Grid-->
            </div>
            <!--End Products-->
        </div>
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

    <!-- Product Quickshop Modal-->
    @include('partials.quickShopModal')
    <!-- End Product Quickshop Modal -->

    <!-- Product Addtocart Modal-->
    @include('partials.productAddtocartModal')
    <!-- End Product Addtocart Modal -->

    <!-- Product Quickview Modal-->
    @include('partials.productQuickviewModal')
    <!--End Product Quickview Modal-->

@endsection
