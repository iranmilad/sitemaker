@extends('layouts.app')
@section('title', 'لیست علاقه مندی ها')
@section('body', 'wishlist-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>سبک لیست علاقه مندی 1</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>سبک لیست علاقه مندی 1</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper shop-toolbar">
                <div class="row align-items-center">
                    <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                        <button type="button" name="add" class="btn btn-secondary"><span>همه افزودن به سبد
                                خرید</span></button>
                    </div>
                    <div
                        class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                        <span class="toolbar-product-count">نمایش: 5 محصول</span>
                    </div>
                    <div
                        class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                        <div class="filters-item d-flex align-items-center">
                            <label for="ShowBy" class="mb-0 ms-2 text-nowrap d-none d-sm-inline-flex">نمایش:</label>
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
                <div class="row col-row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    <div class="item col-item">
                        <div class="product-box position-relative">
                            <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></button>
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product2.jpg') }}"
                                        src="{{ asset('storage/images/products/product2.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product2-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product2-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">فروش</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style2">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="نمایش سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به علاقمندی"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه مندی
                                            ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">کلاهک کاف</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price">115 هزار</span><span class="price">99 هزار</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i>
                                    <span class="caption hidden ms-1">8 بررسی</span>
                                </div>
                                <!-- End Product Review -->
                                <!-- Product Button -->
                                <div class="button-action mt-3">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="text">فروشگاه سریع</span>
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
                        <div class="product-box position-relative">
                            <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></button>
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product3.jpg') }}"
                                        src="{{ asset('storage/images/products/product3.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product3-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product3-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl pr-label3">پرطرفدار</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style2">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="نمایش سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به علاقمندی"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به
                                            علاقمندی</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به لیست مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به لیست
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
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
                                    <span class="caption hidden ms-1">10 نظر</span>
                                </div>
                                <!-- End Product Review -->
                                <!-- Product Button -->
                                <div class="button-action mt-3">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="text">گزینه ها را انتخاب کنید</span>
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
                        <div class="product-box position-relative">
                            <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></button>
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product4.jpg') }}"
                                        src="{{ asset('storage/images/products/product4.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product4-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product4-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">50 درصد تخفیف</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style2">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به علاقمندی"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به
                                            علاقمندی</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به لیست مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به لیست
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">کلاه‌پوش نخی</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price">198 هزار</span><span class="price">99 هزار</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">0 نظر</span>
                                </div>
                                <!-- End Product Review -->
                                <!-- Product Button -->
                                <div class="button-action mt-3">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="text">به سبد خرید اضافه کنید</span>
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
                        <div class="product-box position-relative">
                            <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></button>
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product5.jpg') }}"
                                        src="{{ asset('storage/images/products/product5.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product5-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product5-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl pr-label2">جدید</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style2">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به علاقمندی"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به
                                            علاقمندی</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به لیست مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به لیست
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">هودهای یقه دار</a>
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
                                    <span class="caption hidden ms-1">3 بررسی</span>
                                </div>
                                <!-- End Product Review -->
                                <!-- Product Button -->
                                <div class="button-action mt-3">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="text">به سبد خرید اضافه کنید</span>
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
                        <div class="product-box position-relative">
                            <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></button>
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product6.jpg') }}"
                                        src="{{ asset('storage/images/products/product6.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product6-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product6-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">فروخته شده</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style2">
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به علاقمندی"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به
                                            علاقمندی</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="افزودن به لیست مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن به لیست
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">کیف دافلی تاشو</a>
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
                                    <span class="caption hidden ms-1">15 بررسی</span>
                                </div>
                                <!-- End Product Review -->
                                <!-- Product Button -->
                                <div class="button-action mt-3">
                                    <div class="addtocart-btn">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#addtocart-modal"
                                                class="btn btn-md add-to-cart-modal soldOutBtn disabled"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="text">تمام شده</span>
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
                </nav>
                <!-- End Pagination -->
            </div>
            <!--End Product Grid-->
        </div>
        <!--End Main Content-->
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
