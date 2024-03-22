@extends('layouts.app')
@section('title', 'صفحه اصلی')
@section('body', 'template-index')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Home Slideshow   1 | 2 | 3 -->
        @include('partials.slideshow.slider1')
        <!--End Home Slideshow-->

        <!--Brand Logo-->
        <section class="section logo-section pb-0">
            <div class="container container-1330">
                <div class="section-header d-none">
                    <h2>برندهای محبوب</h2>
                    <p> راه را به سوی یک روز روشن‌تر معرفی کنید</p>
                </div>

                <div class="brands-list">
                    <div class="brands-row logo-bar logo-slider-6items gp10 arwOut5 hov-arrow" dir="ltr">
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="{{ asset('storage/images/logo/brandlogo1.png') }}" alt="Brand Logo" title=""
                                    width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="{{ asset('storage/images/logo/brandlogo2.png') }}" alt="Brand Logo" title=""
                                    width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload"
                                    src="{{ asset('storage/images/logo/brandlogo3.png') }}" alt="Brand Logo" title=""
                                    width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img
                                    class="blur-up lazyload" src="{{ asset('storage/images/logo/brandlogo4.png') }}"
                                    alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img
                                    class="blur-up lazyload" src="{{ asset('storage/images/logo/brandlogo5.png') }}"
                                    alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img
                                    class="blur-up lazyload" src="{{ asset('storage/images/logo/brandlogo6.png') }}"
                                    alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                        <div class="brands-logo">
                            <a href="shop-right-sidebar.html" class="zoom-scal zoom-scal-nopb"><img
                                    class="blur-up lazyload" src="{{ asset('storage/images/logo/brandlogo7.png') }}"
                                    alt="Brand Logo" title="" width="194" height="97" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand Logo-->

        <!--Collection banner-->
        <section class="section collection-banners">
            <div class="container container-1330">
                <div class="section-header">
                    <p>خرید بر اساس دسته</p>
                    <h2>کاوش مجموعه ها</h2>
                </div>

                <div class="collection-banner-grid">
                    <div class="row sp-row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/collection/demo2-ct-img1.jpg') }}"
                                            src="{{ asset('storage/images/collection/demo2-ct-img1.jpg') }}"
                                            alt = "مجموعه" title="" width="645" height="245" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">کفش کتانی (15)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/collection/demo2-ct-img2.jpg') }}"
                                            src="{{ asset('storage/images/collection/demo2-ct-img2.jpg') }}"
                                            alt="collection " title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">کفش‌های غیررسمی (07)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/collection/demo2-ct-img3.jpg') }}"
                                            src="{{ asset('storage/images/collection/demo2-ct-img3.jpg') }}"
                                            alt = "مجموعه" title="" width="645" height="416" />
                                    </div>
                                    <div class="details middle-center p-0">
                                        <div class="inner">
                                            <span class="text">کفش پاشنه بلند (12)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/collection/demo2-ct-img4.jpg') }}"
                                            src="{{ asset('storage/images/collection/demo2-ct-img4.jpg') }}"
                                            alt = "مجموعه" title="" width="645" height="246" />
                                    </div>
                                    <div class="details middle-left">
                                        <div class="inner">
                                            <span class="text">کفش پاشنه بلند (12)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="view-collection text-center mt-4 mt-md-5">
                    <a href="collection-style2.html" class="btn btn-primary btn-lg">مرور همه</a>
                </div>
            </div>
        </section>
        <!--End Collection banner-->

        <!--Products Slider-->
        <section class="section product-slider py-0">
            <div class="container container-1330">
                <div class="section-header">
                    <p>پرفروش‌ترین‌های هفتگی</p>
                    <h2>سبک پرطرفدار</h2>
                </div>

                <div class="product-slider-4items gp15 arwOut5 grid-products" dir="ltr">
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload"
                                        src="{{ asset('storage/images/products/fw-product.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" /></a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels rounded"><span class="lbl on-sale">فروش</span></div>
                                <!-- End Product label -->
                                <!--Countdown Timer-->
                                <div class="saleTime" data-countdown="2025/01/01"></div>
                                <!--End Countdown Timer-->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop_modal" class="btn btn-secondary addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">فروشگاه سریع</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!--Product Vendor-->
                                <div class="product-vendor">دمپایی</div>
                                <!--End Product Vendor-->
                                <!-- Product Name -->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">دمپایی زنانه</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price"> 114.00 تومان</span><span class="price"> 99.00
                                        تومان</span>
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product1-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product1-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop_modal" class="btn btn-secondary addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">گزینه مورد نظر را
                                            انتخاب کنید</span>
                                    </a>
                                    <!--End Cart Button-->
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
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">کفش کلاسیک پمپ</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price"> 128.00 تومان</span>
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product2.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product2.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product2-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product2-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels rounded"><span class="lbl pr-label3">جدید</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn btn-secondary addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">افزودن به سبد
                                            خرید</span>
                                    </a>
                                    <!--End Cart Button-->
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
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">کفش استیلتو نوک تیز</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price"> 99.00 تومان</span>
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product3-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product3-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product3.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product3.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn btn-secondary addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">افزودن به سبد
                                            خرید</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                                <!--Product Availability-->
                                <div class="product-availability">
                                    <div class="lh-1 d-flex justify-content-between">
                                        <div class="text-sold">فروخته شد:<strong class="text-primary ms-1">34</strong>
                                        </div>
                                        <div class="text-available">در دسترس:<strong class="text-primary ms-1">16</strong>
                                        </div>
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
                                <div class="product-vendor">کفش</div>
                                <!--End Product Vendor-->
                                <!-- Product Name -->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">کفش دویدن سپیا</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price"> 198.00 تومان</span><span class="price"> 99.00
                                        تومان</span>
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product4.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product4.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product4-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product4-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels rounded"><span class="lbl pr-label2"> داغ</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn btn-secondary addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">افزودن به سبد
                                            خرید</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!--Product Vendor-->
                                <div class="product-vendor"> داغ</div>
                                <!--End Product Vendor-->
                                <!-- Product Name -->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">کفش های گاه به گاه شیک</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price"> 39.00 تومان</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">3 نظر</span>
                                </div>
                                <!-- End Product Review -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product5.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product5.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product5-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product5-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn btn-secondary addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">افزودن به سبد
                                            خرید</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!--Product Vendor-->
                                <div class="product-vendor"> داغ</div>
                                <!--End Product Vendor-->
                                <!-- Product Name -->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">دمپایی مصنوعی</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price"> 299.00 تومان</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">15 نظر</span>
                                </div>
                                <!-- End Product Review -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product6-1.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product6-1.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/fw-product6.jpg') }}"
                                        src="{{ asset('storage/images/products/fw-product6.jpg') }}" alt="محصول"
                                        title="محصول" width="600" height="600" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set-top style1">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <div class="button-set-bottom style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn btn-secondary addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">افزودن به سبد
                                            خرید</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!--Product Vendor-->
                                <div class="product-vendor">صندل</div>
                                <!--End Product Vendor-->
                                <!-- Product Name -->
                                <div class="product-name text-uppercase">
                                    <a href="product-layout1.html">صندل دیابتی</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price"> 139.00 تومان</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">11 نظرات</span>
                                </div>
                                <!-- End Product Review -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Products Slider-->

        <!--Featured Content-->
        <section class="section featured-content style1 pb-0">
            <div class="container container-1330">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="d-flex align-items-stretch justify-content-between w-100 flex-md-row flex-column">
                            <div
                                class="f-item fl-1 d-flex w-100 align-items-center justify-content-center bg-light order-md-0 order-xl-0 order-sm-1 order-lg-0 order-1">
                                <div class="f-text order-3 text-center px-4 mx-sm-5 mx-md-4 py-4 py-sm-5 py-md-4">
                                    <h3 class="fs-3 mb-3 mb-md-4 text-black">20% تخفیف بهار تابستان</h3>
                                    <div class="rte rte-setting d-flex mb-4 pb-md-2">
                                        <p class="text-medium">با کد تخفیف بیشتر در فروش زمستانی ما صرفه جویی کنید<br> <b>
                                                + ارسال رایگان</b> برای تمام سفارشات بالای 50 تومان</p>
                                    </div>
                                    <a href="shop-right-sidebar.html" class="btn btn-lg mt20">اکنون کشف کنید!</a>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center">
                                <div class="f-image order-2">
                                    <img class="blur-up lazyloaded"
                                        data-src="{{ asset('storage/images/content/fc-img1.jpg') }}"
                                        src="{{ asset('storage/images/content/fc-img1.jpg') }}" alt = "تصویر"
                                        title="" width="750" height="625" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Content-->

        <!--Blog Post-->
        <section class="section home-blog-post pb-0">
            <div class="container container-1330">
                <div class="section-header">
                    <p>داستان های خبری</p>
                    <h2>آخرین از وبلاگ ما</h2>
                </div>

                <div class="blog-slider-3items gp15 arwOut5 hov-arrow text-center" dir="ltr">
                    <div class="blog-item">
                        <div class="blog-article zoomscal-hov">
                            <div class="blog-img">
                                <a class="featured-image zoom-scal" href="blog-details.html"><img
                                        class="blur-up lazyload"
                                        data-src="{{ asset('storage/images/blog/post-img4.jpg') }}"
                                        src="{{ asset('storage/images/blog/post-img4.jpg') }}"
                                        alt="مجموعه فروشگاهی جدید فروشگاه ما" width="740" height="410" /></a>
                            </div>
                            <div class="blog-content">
                                <h2 class="h4"><a href="blog-details.html">مجموعه فروشگاه جدید فروشگاه ما</a></h2>
                                <ul class="publish-detail d-flex-wrap justify-content-center mb-3">
                                    <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1"> ارسال شده
                                            توسط:</span> کاربر</li>
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">02 ژانویه
                                            2023</time></li>
                                    <li><i class="icon anm anm-comments-l"></i> <a href="#">2 نظر</a></li>
                                </ul>
                                <a href="blog-details.html" class="btn btn-outline-secondary btn-md">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-article zoomscal-hov">
                            <div class="blog-img">
                                <a class="featured-image zoom-scal" href="blog-details.html"><img
                                        class="blur-up lazyload"
                                        data-src="{{ asset('storage/images/blog/post-img5.jpg') }}"
                                        src="{{ asset('storage/images/blog/post-img5.jpg') }}"
                                        alt="ایده های هدیه برای همه" width="740" height="410" /></a>
                            </div>
                            <div class="blog-content">
                                <h2 class="h4"><a href="blog-details.html">ایده های هدیه برای همه</a></h2>
                                <ul class="publish-detail d-flex-wrap justify-content-center mb-3">
                                    <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1"> ارسال شده
                                            توسط:</span> کاربر</li>
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-24">24 ژانویه
                                            2023</time></li>
                                    <li><i class="icon anm anm-comments-l"></i> <a href="#">۰ نظر</a></li>
                                </ul>
                                <a href="blog-details.html" class="btn btn-outline-secondary btn-md">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-article zoomscal-hov">
                            <div class="blog-img">
                                <a class="featured-image zoom-scal" href="blog-details.html"><img
                                        class="blur-up lazyload"
                                        data-src="{{ asset('storage/images/blog/post-img6.jpg') }}"
                                        src="{{ asset('storage/images/blog/post-img6.jpg') }}"
                                        alt="فروش با بهترین مجموعه" width="740" height="410" /></a>
                            </div>
                            <div class="blog-content">
                                <h2 class="h4"><a href="blog-details.html">فروش با بهترین مجموعه</a></h2>
                                <ul class="publish-detail d-flex-wrap justify-content-center mb-3">
                                    <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1"> ارسال شده
                                            توسط:</span> کاربر</li>
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-02-14">14 فوریه
                                            2023</time></li>
                                    <li><i class="icon anm anm-comments-l"></i> <a href="#">4 نظر</a></li>
                                </ul>
                                <a href="blog-details.html" class="btn btn-outline-secondary btn-md">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog Post-->
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
