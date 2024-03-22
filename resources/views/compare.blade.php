@extends('layouts.app')
@section('title', 'مقایسه محصولات')
@section('body', 'compare-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1> مقایسه سبک1</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i> مقایسه سبک1</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                <span class="text-primary fw-600">4</span> محصول در این لیست مقایسه وجود دارد
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!--مقایسه-->
            <div class="table-wrapper mt-4 compare-table table-responsive">
                <form action="#" method="post">
                    <table class="table table-bordered align-middle">
                        <tbody>
                            <tr>
                                <th class="name">محصولات</th>
                                <td class="item-row">
                                    <div class="product-image position-relative">
                                        <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"><i
                                                class="icon anm anm -times-r"></i></button>
                                        <div class="product-labels"><span class="lbl on-sale">10% تخفیف</span></div>
                                        <img class="image rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1.jpg') }}"
                                            src="{{ asset('storage/images/products/product1.jpg') }}" alt="محصول"
                                            title=" محصول" width="625" height="808" />
                                        <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i
                                                class="icon anm anm-search -plus-l"></i></button>
                                    </div>
                                    <div class="product-name mt-3"><a href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                    </div>
                                    <div class="product-price fw-500"><span class="old-price">110.00 تومان </span><span
                                            class="price">99.00 تومان </span></div>
                                </td>
                                <td class="item-row">
                                    <div class="product-image position-relative">
                                        <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"><i
                                                class="icon anm anm -times-r"></i></button>
                                        <div class="product-labels"><span class="lbl on-sale">20% تخفیف</span></div>
                                        <img class="image rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product2.jpg') }}"
                                            src="{{ asset('storage/images/products/product2.jpg') }}" alt="محصول"
                                            title=" محصول" width="625" height="808" />
                                        <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i
                                                class="icon anm anm-search -plus-l"></i></button>
                                    </div>
                                    <div class="product-name mt-3"><a href="product-layout1.html">کلاه کاف</a></div>
                                    <div class="product-price fw-500"><span class="old-price">120.00 تومان </span><span
                                            class="price">99.00 تومان </span></div>
                                </td>
                                <td class="item-row">
                                    <div class="product-image position-relative">
                                        <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"><i
                                                class="icon anm anm -times-r"></i></button>
                                        <div class="product-labels"><span class="lbl on-sale">30% تخفیف</span></div>
                                        <img class="image rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product3.jpg') }}"
                                            src="{{ asset('storage/images/products/product3.jpg') }}" alt="محصول"
                                            title=" محصول" width="625" height="808" />
                                        <button type="button" class="btn btn-light quick-view-modal" data-bs-toggle="modal"
                                            data-bs-target="#quickview_modal"><i
                                                class="icon anm anm-search -plus-l"></i></button>
                                    </div>
                                    <div class="product-name mt-3"><a href="product-layout1.html">پیراهن یقه فلانل</a>
                                    </div>
                                    <div class="product-price fw-500"><span class="old-price">130.00 تومان </span><span
                                            class="price">99.00 تومان </span></div>
                                </td>
                                <td class="item-row">
                                    <div class="product-image position-relative"><button type="button"
                                            class="btn remove-icon close-btn" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"><i
                                                class="icon anm anm -times-r"></i></button>
                                        <div class="product-labels"><span class="lbl on-sale">40% تخفیف</span></div>
                                        <img class="image rounded-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product4.jpg') }}"
                                            src="{{ asset('storage/images/products/product4.jpg') }}" alt="محصول"
                                            title=" محصول" width="625" height="808" />
                                        <button type="button" class="btn btn-light quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal"><i
                                                class="icon anm anm-search -plus-l"></i></button>
                                    </div>
                                    <div class="product-name mt-3"><a href="product-layout1.html">کلاه‌پوش نخی</a></div>
                                    <div class="product-price fw-500"><span class="old-price">140.00 تومان </span><span
                                            class="price">99.00 تومان </span></div>
                                </td>
                            </tr>
                            <tr>
                                <th class="name"></th>
                                <td class="text-in-stock fw-500">
                                    <a href="cart-style1.html" class="add-to-cart btn">افزودن به سبد خرید</a>
                                </td>
                                <td class="text-in-stock fw-500">
                                    <a href="cart-style1.html" class="add-to-cart btn">افزودن به سبد خرید</a>
                                </td>
                                <td class="text-out-stock fw-500">
                                    <button type="button" class="add-to-cart btn soldOutBtn">در انبار موجود نیست</button>
                                </td>
                                <td class="text-in-stock fw-500">
                                    <a href="cart-style1.html" class="add-to-cart btn">افزودن به سبد خرید</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="name">در دسترس بودن</th>
                                <td class="text-in-stock fw-500">
                                    <p>در انبار</p>
                                </td>
                                <td class="text-in-stock fw-500">
                                    <p>در انبار</p>
                                </td>
                                <td class="text-out-stock fw-500">
                                    <p>در انبار موجود نیست</p>
                                </td>
                                <td class="text-in-stock fw-500">
                                    <p>در انبار</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="name">رتبه‌بندی‌ها و نظرات</th>
                                <td class="item-row">
                                    <div class="product-review d-flex-justify-center mt-0">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption text-muted me-1">(16 نظر)</span>
                                    </div>
                                </td>
                                <td class="item-row">
                                    <div class="product-review d-flex-justify-center mt-0">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption text-muted me-1">(24 نظر)</span>
                                    </div>
                                </td>
                                <td class="item-row">
                                    <div class="product-review d-flex-justify-center mt-0">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i>
                                        <span class="caption text-muted me-1">(31 نظر)</span>
                                    </div>
                                </td>
                                <td class="item-row">
                                    <div class="product-review d-flex-justify-center mt-0">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i> <i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption text-muted me-1">(11 نظر)</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="name">SKU</th>
                                <td class="item-row">DP987654</td>
                                <td class="item-row">DP987655</td>
                                <td class="item-row">DP987656</td>
                                <td class="item-row">DP987657</td>
                            </tr>
                            <tr>
                                <th class="name">برند</th>
                                <td class="item-row">
                                    روش
                                </td>
                                <td class="item-row">
                                    کفش
                                </td>
                                <td class="item-row">
                                    کیسه ها
                                </td>
                                <td class="item-row">
                                    الکترونیکی
                                </td>
                            </tr>
                            <tr>
                                <th class="name">رنگ</th>
                                <td class="item-row">
                                    آبی، زرد، مارون
                                </td>
                                <td class="item-row">
                                    قهوه ای، خاکستری، طلایی
                                </td>
                                <td class="item-row">
                                    خاکی، نارنجی، مشکی
                                </td>
                                <td class="item-row">
                                    سبز، قرمز، صورتی
                                </td>
                            </tr>
                            <tr>
                                <th class="name">اندازه</th>
                                <td class="item-row">
                                    XL، XXL
                                </td>
                                <td class="item-row">
                                    M، XL
                                </td>
                                <td class="item-row">
                                    اس، ال
                                </td>
                                <td class="item-row">
                                    XS، M
                                </td>
                            </tr>
                            <tr>
                                <th class="name">توضیح</th>
                                <td class="item-row">
                                    <ul class="list-styled text-right">
                                        <li>اگر می خواهید از پاساژ استفاده کنید</li>
                                        <li>ترکیب با مدل دستی</li>
                                        <li>همیشه عاری از تکرار</li>
                                    </ul>
                                </td>
                                <td class="item-row">
                                    <ul class="list-styled text-right">
                                        <li>اگر می خواهید از پاساژ استفاده کنید</li>
                                        <li>ترکیب با مدل دستی</li>
                                        <li>همیشه عاری از تکرار</li>
                                    </ul>
                                </td>
                                <td class="item-row">
                                    <ul class="list-styled text-right">
                                        <li>اگر می خواهید از پاساژ استفاده کنید</li>
                                        <li>ترکیب با مدل دستی</li>
                                        <li>همیشه از دادخواست</li>
                                    </ul>
                                </td>
                                <td class="item-row">
                                    <ul class="list-styled text-right">
                                        <li>اگر می خواهید از پاساژ استفاده کنید</li>
                                        <li>ترکیب با مدل دستی</li>
                                        <li>همیشه عاری از تکرار</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--پایان مقایسه-->
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
