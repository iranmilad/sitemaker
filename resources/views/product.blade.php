@extends('layouts.app')
@section('title', 'محصول')
@section('css')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/photoswipe.min.css') }}">
    </link>
@endsection
@section('body', 'template-product')


@section('content')
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">صفحه اصلی</a><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>طرح بندی محصول 1</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <!--Product Content-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                        <!-- Product Horizontal -->
                        <div class="product-details-img product-horizontal-style">
                            <!-- Product Main -->
                            <div class="zoompro-wrap">
                                <!-- Product Image -->
                                <div class="zoompro-span"><img id="zoompro" class="zoompro"
                                        src="{{ asset('storage/images/products/product1.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1.jpg') }}" alt="محصول"
                                        width="625" height="808" /></div>
                                <!-- End Product Image -->
                                <!-- Product Label -->
                                <div class="product-labels"><span class="lbl pr-label1">جدید</span><span
                                        class="lbl on-sale">فروش</span></div>
                                <!-- End Product Label -->
                                <!-- Product Buttons -->
                                <div class="product-buttons">
                                    <a href="#productVideo-modal" class="btn btn-primary popup-video" data-bs-toggle="modal"
                                        data-bs-target="#productVideo_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Watch Video"><i
                                                class="icon anm anm-video-r"></i></span>
                                    </a>
                                    <a href="#;" class="btn btn-primary prlightbox" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Zoom Image"><i
                                            class="icon anm anm-expand-l-arrows"></i></a>
                                </div>
                                <!-- End Product Buttons -->
                            </div>
                            <!-- End Product Main -->

                            <!-- Product Thumb -->
                            <div class="product-thumb product-horizontal-thumb mt-3">
                                <div id="gallery" class="product-thumb-horizontal" dir="ltr">
                                    <a data-image="{{ asset('storage/images/products/product1.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1.jpg') }}"
                                        class="slick-slide slick-cloned active">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1.jpg') }}"
                                            src="{{ asset('storage/images/products/product1.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                    <a data-image="{{ asset('storage/images/products/product1-1.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1-1.jpg') }}"
                                        class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1-1.jpg') }}"
                                            src="{{ asset('storage/images/products/product1-1.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                    <a data-image="{{ asset('storage/images/products/product1-2.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1-2.jpg') }}"
                                        class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1-2.jpg') }}"
                                            src="{{ asset('storage/images/products/product1-2.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                    <a data-image="{{ asset('storage/images/products/product1-3.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1-3.jpg') }}"
                                        class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1-3.jpg') }}"
                                            src="{{ asset('storage/images/products/product1-3.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                    <a data-image="{{ asset('storage/images/products/product1-4.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1-4.jpg') }}"
                                        class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1-4.jpg') }}"
                                            src="{{ asset('storage/images/products/product1-4.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                    <a data-image="{{ asset('storage/images/products/product1-5.jpg') }}"
                                        data-zoom-image="{{ asset('storage/images/products/product1-5.jpg') }}"
                                        class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/products/product1-5.jpg') }}"
                                            src="{{ asset('storage/images/products/product1-5.jpg') }}" alt="محصول"
                                            width="625" height="808" />
                                    </a>
                                </div>
                            </div>
                            <!-- End Product Thumb -->

                            <!-- Product Gallery -->
                            <div class="lightboximages">
                                <a href="{{ asset('storage/images/products/product1.jpg') }}" data-size="1000x1280"></a>
                                <a href="{{ asset('storage/images/products/product1-1.jpg') }}"
                                    data-size="1000x1280"></a>
                                <a href="{{ asset('storage/images/products/product1-2.jpg') }}"
                                    data-size="1000x1280"></a>
                                <a href="{{ asset('storage/images/products/product1-3.jpg') }}"
                                    data-size="1000x1280"></a>
                                <a href="{{ asset('storage/images/products/product1-4.jpg') }}"
                                    data-size="1000x1280"></a>
                                <a href="{{ asset('storage/images/products/product1-5.jpg') }}"
                                    data-size="1000x1280"></a>
                            </div>
                            <!-- End Product Gallery -->
                        </div>
                        <!-- End Product Horizontal -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                        <!-- Product Details -->
                        <div class="product-single-meta">
                            <h2 class="product-main-title">سبک چیدمان محصول 1</h2>
                            <!-- Product Reviews -->
                            <div class="product-review d-flex-center mb-3">
                                <div class="reviewStar d-flex-center"><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span
                                        class="caption me-2">24 بررسی ها</span></div>
                                <a class="reviewLink d-flex-center" href="#reviews">یک نظر بنویسید</a>
                            </div>
                            <!-- End Product Reviews -->
                            <!-- Product Info -->
                            <div class="product-info">
                                <p class="product-stock d-flex">دسترسی:
                                    <span class="pro-stockLbl ps-0">
                                        <span class="d-flex-center stockLbl instock text-uppercase">موجود در انبار</span>
                                    </span>
                                </p>
                                <p class="product-vendor">فروشنده:<span class="text"><a href="#">HVL</a></span>
                                </p>
                                <p class="product-type">نوع محصول:<span class="text">برترین‌ها</span></p>
                                <p class="product-sku">شناسه:<span class="text">RF104</span></p>
                            </div>
                            <!-- End Product Info -->
                            <!-- Product Price -->
                            <div class="product-price d-flex-center my-3">
                                <span class="price old-price">135 هزار</span><span class="price">99 هزار</span>
                            </div>
                            <!-- End Product Price -->
                            <hr>
                            <!-- Sort Description -->
                            <div class="sort-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                باشد</div>
                            <!-- End Sort Description -->
                            <hr>
                            <!-- Countdown -->
                            <h3 class="text-uppercase mb-0">عجله کن! فروش به پایان می رسد</h3>
                            <div class="product-countdown d-flex-center text-center my-3" data-countdown="2028/12/12">
                            </div>
                            <!-- End Countdown -->
                        </div>
                        <!-- End Product Details -->

                        <!-- Product Form -->
                        <form method="post" action="#" class="product-form product-form-border hidedropdown">
                            <!-- Swatches -->
                            <div class="product-swatches-option">
                                <!-- Swatches Color -->
                                <div class="product-item swatches-image w-100 mb-4 swatch-0 option1"
                                    data-option-index="0">
                                    <label class="label d-flex align-items-center">رنگ:<span
                                            class="slVariant me-1 fw-bold">آبی</span></label>
                                    <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                        <li class="swatch x-large available active"><img
                                                src="{{ asset('storage/images/products/product1-1-80x.jpg') }}"
                                                alt="تصویر" width="80" height="80" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="آبی" /></li>
                                        <li class="swatch x-large available"><img
                                                src="{{ asset('storage/images/products/product1-2-80x.jpg') }}"
                                                alt="تصویر" width="80" height="80" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="مشکی" /></li>
                                        <li class="swatch x-large available purple"><img
                                                src="{{ asset('storage/images/products/product1-3-80x.jpg') }}"
                                                alt="تصویر" width="80" height="80" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="بنفش" /></li>
                                        <li class="swatch x-large available green"><img
                                                src="{{ asset('storage/images/products/product1-4-80x.jpg') }}"
                                                alt="تصویر" width="80" height="80" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="سبز" /></li>
                                        <li class="swatch x-large soldout yellow"><img
                                                src="{{ asset('storage/images/products/product1-5-80x.jpg') }}"
                                                alt="تصویر" width="80" height="80" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="زرد" /></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="product-item swatches-size w-100 mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex align-items-center">اندازه:<span
                                            class="slVariant me-1 fw-bold">S</span> <a href="#sizechart-modal"
                                            class="text-link sizelink text-muted size-chart-modal" data-bs-toggle="modal"
                                            data-bs-target="#sizechart_modal">راهنمای اندازه</a></label>
                                    <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                        <li class="swatch x-large soldout"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span>
                                        </li>
                                        <li class="swatch x-large available active"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span>
                                        </li>
                                        <li class="swatch x-large available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span>
                                        </li>
                                        <li class="swatch x-large available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span>
                                        </li>
                                        <li class="swatch x-large available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Swatches Size -->
                            </div>
                            <!-- End Swatches -->

                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
                                <!-- Product Quantity -->
                                <div class="product-form-quantity d-flex-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1"
                                            class="product-form-input qty" />
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Quantity -->
                                <!-- Product Add -->
                                <div class="product-form-submit addcart fl-1 me-3">
                                    <button type="submit" name="add"
                                        class="btn btn-secondary product-form-cart-submit">
                                        <span>به سبد خرید اضافه کنید</span>
                                    </button>
                                    <button type="submit" name="add"
                                        class="btn btn-secondary product-form-sold-out d-none" disabled="disabled">
                                        <span>تمام شده</span>
                                    </button>
                                    <button type="submit" name="add"
                                        class="btn btn-secondary product-form-pre-order d-none">
                                        <span>اکنون پیش خرید کنید</span>
                                    </button>
                                </div>
                                <!-- Product Add -->
                                <!-- Product Buy -->
                                <div class="product-form-submit buyit fl-1 me-3">
                                    <button type="submit" class="btn btn-primary proceed-to-checkout"><span>خرید
                                            کنید</span></button>
                                </div>
                                <!-- End Product Buy -->
                            </div>
                            <!-- End Product Action -->

                            <!-- Product Info link -->
                            <p class="infolinks d-flex-center justify-content-between">
                                <a class="text-link wishlist" href="wishlist-style1.html"><i
                                        class="icon anm anm-heart-l ms-2"></i> <span>افزودن به فهرست آرزوها</span> </a>
                                <a class="text-link compare" href="compare-style1.html"><i
                                        class="icon anm anm-sync-ar ms-2"></i> <span>افزودن به مقایسه</span> </a>
                                <a href="#shippingInfo-modal" class="text-link shippingInfo" data-bs-toggle="modal"
                                    data-bs-target="#shippingInfo_modal"><i class="icon anm anm-paper-l -plane ms-2"></i>
                                    <span>تحویل & برمی‌گرداند</span></a>
                                <a href="#productInquiry-modal" class="text-link emaillink me-0" data-bs-toggle="modal"
                                    data-bs-target="#productInquiry_modal"><i class="icon anm anm- question-cil ms-2"></i>
                                    <span>پرس و جو</span></a>
                            </p>
                            <!-- End Product Info link -->
                        </form>
                        <!-- End Product Form -->

                        <!-- Product Info -->
                        <div class="userViewMsg featureText" data-user="20" data-time="11000"><i
                                class="icon anm anm-eye-r"></i><b class="uersView">21 </b> مردم به دنبال این محصول هستند
                        </div>
                        <div class="shippingMsg featureText"><i class="icon anm anm-clock-r"></i>تحویل تخمینی بین <b
                                id="fromDate">چهارشنبه، 1 شهریور</b> و <b id ="toDate">سه شنبه، 7 مهر</b>.</div>
                        <div class="freeShipMsg featureText" data-price="199"><i class="icon anm anm-truck-r"></i>خرج شده
                            <b class="freeShip"><span class="money" data-currency-usd="199.00تومان"
                                    data-currency="USD">199 هزار</span></b> موارد بیشتر برای ارسال رایگان</div>
                        <!-- End Product Info -->

                        <!-- Social Sharing -->
                        <div class="social-sharing d-flex-center mt-2 lh-lg">
                            <span class="sharing-lbl fw-600">اشتراک گذاری:</span>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"><i
                                    class="icon anm anm-facebook-f"></i><span class="share-title">فیس بوک</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"><i
                                    class="icon anm anm-twitter"></i><span class="share-title">توئیت</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"><i
                                    class="icon anm anm-pinterest-p"></i> <span class="share-title">آن را پین
                                    کنید</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"><i
                                    class="icon anm anm-linkedin-in"></i><span class="share-title">Linkedin</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i
                                    class="icon anm anm-envelope-l"></i><span class="share-title">ایمیل</span></a>
                        </div>
                        <!-- End Social Sharing -->
                    </div>
                </div>
            </div>
            <!--Product Content-->

            <!--Product Nav-->
            <a href="product-layout7.html" class="product-nav prev-pro clr-none d-flex-center justify-content-between"
                title="Previous Product">
                <span class="details">
                    <span class="name">پیراهن کوبایی آکسفورد</span>
                    <span class="price">99 هزار</span>
                </span>
                <span class="img"><img src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                        alt="محصول" width="120" height="170" /></span>
            </a>
            <a href="product-layout2.html" class="product-nav next-pro clr-none d-flex-center justify-content-between"
                title="Next Product">
                <span class="img"><img src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                        alt="محصول" width="120" height="170" /></span>
                <span class="details">
                    <span class="name">کلاهک کاف</span>
                    <span class="price">128 هزار</span>
                </span>
            </a>
            <!--End Product Nav-->

            <!--Product Tabs-->
            <div class="tabs-listing section pb-0">
                <ul class="product-tabs style2 list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                    <li rel="description" class="active"><a class="tablink">توضیحات</a></li>
                    <li rel="additionalInformation"><a class="tablink">اطلاعات اضافی</a></li>
                    <li rel="size-chart"><a class="tablink">نمودار اندازه</a></li>
                    <li rel="shipping-return"><a class="tablink">ارسال و بازگشت</a></li>
                    <li rel="reviews"><a class="tablink">بررسی ها</a></li>
                </ul>

                <div class="tab-container">
                    <!--Description-->
                    <h3 class="tabs-ac-style d-md-none active" rel="description">شرح</h3>
                    <div id="description" class="tab-content">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                        می باشد</p>
                                    <h4 class="mb-3">امکانات</h4>
                                    <ul class="checkmark-info">
                                        <li>پارچه با کیفیت بالا، بسیار راحت برای لمس و پوشیدن.</li>
                                        <li>این ژاکت کش باف پشمی بدون دلیل زیبا است، برای مسافرت و گاه به گاه مناسب است.
                                        </li>
                                        <li>می‌تواند از جلو ببندد - برای شکم شما بخشنده است یا از پشت گره می‌زند.</li>
                                        <li>وزن سبک و مناسب برای لایه بندی.</li>
                                    </ul>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                        می باشد لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                        است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <img data-src="{{ asset('storage/images/content/product-detail-img.jpg') }}"
                                        src="{{ asset('storage/images/content/product-detail-img.jpg') }}" alt="تصویر"
                                        width="600" height="600" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Description-->

                    <!--Additional Information-->
                    <h3 class="tabs-ac-style d-md-none" rel="additionalInformation">اطلاعات تکمیلی</h3>
                    <div id="additionalInformation" class="tab-content">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle table-part mb-0">
                                            <tr>
                                                <th>رنگ</th>
                                                <td>سیاه، سفید، آبی، قرمز، خاکستری</td>
                                            </tr>
                                            <tr>
                                                <th>ابعاد محصول</th>
                                                <td>15 x 15 x 3 سانتی متر؛ 250 گرم</td>
                                            </tr>
                                            <tr>
                                                <th>تاریخ اولین موجود</th>
                                                <td>14 شهریور 1402</td>
                                            </tr>
                                            <tr>
                                                <th>تولید کننده</th>
                                                <td>مد و خرده فروشی محدود</td>
                                            </tr>
                                            <tr>
                                                <th>بخش</th>
                                                <td>پیراهن مردانه</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Additional Information-->

                    <!--Size Chart-->
                    <h3 class="tabs-ac-style d-md-none" rel="size-chart">نمودار اندازه</h3>
                    <div id="size-chart" class="tab-content">
                        <h4 class="mb-2">لباس های آماده برای پوشیدن</h4>
                        <p class="mb-4">این یک راهنمای استاندارد است تا به شما ایده دهد که به چه اندازه ای نیاز دارید، با
                            این حال ممکن است برخی از مارک ها با این تبدیل ها متفاوت باشند.</p>
                        <div class="size-chart-tbl table-responsive px-1">
                            <table class="table-bordered align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>اندازه</th>
                                        <th>XXS - XS</th>
                                        <th>XS - S</th>
                                        <th>S - M</th>
                                        <th>M - L</th>
                                        <th>L - XL</th>
                                        <th>XL - XXL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>بریتانیا</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>ایالات متحده</th>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th>ایتالیا (IT)</th>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <th>فرانسه (FR/EU)</th>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <th>دانمارک</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>روسیه</th>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <th>آلمان</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>ژاپن</th>
                                        <td>5</td>
                                        <td>7</td>
                                        <td>9</td>
                                        <td>11</td>
                                        <td>13</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>استرالیا</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>کره</th>
                                        <td>33</td>
                                        <td>44</td>
                                        <td>55</td>
                                        <td>66</td>
                                        <td>77</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <th>چین</th>
                                        <td>160/84</td>
                                        <td>165/86</td>
                                        <td>170/88</td>
                                        <td>175/90</td>
                                        <td>180/92</td>
                                        <td>185/94</td>
                                    </tr>
                                    <tr>
                                        <th>شلوار جین</th>
                                        <td>24-25</td>
                                        <td>26-27</td>
                                        <td>27-28</td>
                                        <td>29-30</td>
                                        <td>31-32</td>
                                        <td>32-33</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--End Size Chart-->

                    <!--Shipping &  Return-->
                    <h3 class="tabs-ac-style d-md-none" rel="shipping-return">ارسال و بازگشت</h3>
                    <div id="shipping-return" class="tab-content">
                        <h4 class="pb-1">ارسال و بازگشت</h4>
                        <ul class="checkmark-info">
                            <li>ارسال: ظرف 24 ساعت</li>
                            <li>1 سال گارانتی برند</li>
                            <li>ارسال رایگان بین تمامی محصولات با حداقل خرید 50 هزاری.</li>
                            <li>زمان تحویل بین المللی - 7-10 روز کاری</li>
                            <li>ممکن است پول نقد هنگام تحویل موجود باشد</li>
                            <li>بازگرداندن و مبادله آسان 30 روزه</li>
                        </ul>
                        <h4 class="pt-1">بازگشت رایگان و آسان</h4>
                        <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه 1500 به عنوان متن
                            ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته یک گالی از نوع را برداشت و آن را به
                            هم زد تا یک کتاب نمونه بسازد. این نه تنها از پنج قرن جان سالم به در برده است، بلکه از جهشی به
                            حروفچینی الکترونیکی نیز جان سالم به در برده است که اساساً بدون تغییر باقی مانده است.</p>
                        <h4 class="pt-1">تامین مالی ویژه</h4>
                        <p>تنوع‌های زیادی از قسمت‌های در دسترس است، اما اکثریت آن‌ها به شکلی دچار تغییر شده‌اند، با طنز
                            تزریقی یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی‌رسند. اگر می خواهید از یک پاساژ استفاده
                            کنید.</p>
                    </div>
                    <!--End Shipping &  Return-->
                    <!--Review-->
                    <h3 class="tabs-ac-style d-md-none" rel="reviews">بررسی</h3>
                    <div id="reviews" class="tab-content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                <div class="ratings-main">
                                    <div class="avg-rating d-flex-center mb-3">
                                        <h4 class="avg-mark">5.0</h4>
                                        <div class="avg-content me-3">
                                            <p class="text-rating">میانگین امتیاز</p>
                                            <div class="ratings-full product-review">
                                                <a class="reviewLink d-flex-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i><span class="caption me-2">24 رتبه
                                                        بندی ها</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ratings-list">
                                        <div class="ratings-container d-flex align-items-center mt-1">
                                            <div class="ratings-full product-review m-0">
                                                <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="99"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:99%;"></div>
                                            </div>
                                            <div class="progress-value">99%</div>
                                        </div>
                                        <div class="ratings-container d-flex align-items-center mt-1">
                                            <div class="ratings-full product-review m-0">
                                                <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:75%;"></div>
                                            </div>
                                            <div class="progress-value">75%</div>
                                        </div>
                                        <div class="ratings-container d-flex align-items-center mt-1">
                                            <div class="ratings-full product-review m-0">
                                                <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:50%;"></div>
                                            </div>
                                            <div class="progress-value">50%</div>
                                        </div>
                                        <div class="ratings-container d-flex align-items-center mt-1">
                                            <div class="ratings-full product-review m-0">
                                                <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:25%;"></div>
                                            </div>
                                            <div class="progress-value">25%</div>
                                        </div>
                                        <div class="ratings-container d-flex align-items-center mt-1">
                                            <div class="ratings-full product-review m-0">
                                                <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                        class="icon anm anm-star"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i><i
                                                        class="icon anm anm-star-o"></i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="5"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:5%;"></div>
                                            </div>
                                            <div class="progress-value">05%</div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="spr-reviews">
                                    <h3 class="spr-form-title">نظرات مشتریان</h3>
                                    <div class="review-inner">
                                        <div class="spr-review d-flex w-100">
                                            <div class="spr-review-profile flex-shrink-0">
                                                <img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/users/testimonial2.jpg') }}"
                                                    src="{{ asset('storage/images/users/testimonial2.jpg') }}"
                                                    alt="" width="200" height="200" />
                                            </div>
                                            <div class="spr-review-content flex-grow-1">
                                                <div class="d-flex justify-content-between flex-column mb-2">
                                                    <div
                                                        class="title-review d-flex align-items-center justify-content-between">
                                                        <h5 class="spr-review-header-title text-transform-none mb-0">النور
                                                            پنا</h5>
                                                        <span class="product-review spr-starratings m-0"><span
                                                                class="reviewLink"><i class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i></span></span>
                                                    </div>
                                                </div>
                                                <b class="head-font">کیفیت خوب و بالا</b>
                                                <p class="spr-review-body">تنوع‌های زیادی از معابر در دسترس است، اما اکثریت
                                                    آن‌ها به نوعی با استفاده از طنز تزریقی دچار تغییر شده‌اند.</p>
                                            </div>
                                        </div>
                                        <div class="spr-review d-flex w-100">
                                            <div class="spr-review-profile flex-shrink-0">
                                                <img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/users/testimonial1.jpg') }}"
                                                    src="{{ asset('storage/images/users/testimonial1.jpg') }}"
                                                    alt="" width="200" height="200" />
                                            </div>
                                            <div class="spr-review-content flex-grow-1">
                                                <div class="d-flex justify-content-between flex-column mb-2">
                                                    <div
                                                        class="title-review d-flex align-items-center justify-content-between">
                                                        <h5 class="spr-review-header-title text-transform-none mb-0">کورتنی
                                                            هنری</h5>
                                                        <span class="product-review spr-starratings m-0"><span
                                                                class="reviewLink"><i class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star"></i><i
                                                                    class="icon anm anm-star-o"></i><i
                                                                    class="icon anm anm-star-o"></i></span></span>
                                                    </div>
                                                </div>
                                                <b class="head-font">در دسترس بودن ویژگی</b>
                                                <p class="spr-review-body">قطعه استاندارد که از دهه 1500 استفاده می شد در
                                                    زیر برای علاقه مندان بازتولید شده است. بخش 1.10.32 و 1.10.33</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                <form method="post" action="#" class="product-review-form new-review-form">
                                    <h3 class="spr-form-title">نظری بنویسید</h3>
                                    <p>آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی با *</p> علامت گذاری شده اند
                                    <fieldset class="row spr-form-contact">
                                        <div class="col-sm-6 spr-form-contact-name form-group">
                                            <label class="spr-form-label" for="nickname">نام <span
                                                    class="required">*</span></label>
                                            <input class="spr-form-input spr-form-input-text" id="nickname"
                                                type="text" name="name" required />
                                        </div>
                                        <div class="col-sm-6 spr-form-contact-email form-group">
                                            <label class="spr-form-label" for="email">پست الکترونیک <span
                                                    class="required">*</span></label>
                                            <input class="spr-form-input spr-form-input-email " id="email"
                                                type="email" name="email" required />
                                        </div>
                                        <div class="col-sm-6 spr-form-review-title form-group">
                                            <label class="spr-form-label" for="review">عنوان را مرور کن </label>
                                            <input class="spr-form-input spr-form-input-text " id="review"
                                                type="text" name="review" />
                                        </div>
                                        <div class="col-sm-6 spr-form-review-rating form-group">
                                            <label class="spr-form-label">رتبه بندی</label>
                                            <div class="product-review pt-1">
                                                <div class="review-rating">
                                                    <a href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                        href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                        href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                        href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                        href="#;"><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 spr-form-review-body form-group">
                                            <label class="spr-form-label" for="message">بدنه بررسی <span
                                                    class="spr-form-review-body-charactersremaining">(1500) کاراکتر باقی
                                                    مانده است</span></label>
                                            <div class="spr-form-input">
                                                <textarea class="spr-form-input spr-form-input-textarea" id="message" name="message" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="spr-form-actions clearfix">
                                        <input type="submit" class="btn btn-primary spr-button spr-button-primary"
                                            value="ارسال بررسی" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Review-->
                </div>
            </div>
            <!--End Product Tabs-->
        </div>
        <!--End Main Content-->

        <!--Related Products-->
        <section class="section product-slider pb-0">
            <div class="container">
                <div class="section-header">
                    <p class="mb-1 mt-0">کشف مشابه</p>
                    <h2>محصولات مرتبط</h2>
                </div>

                <!--Product Grid-->
                <div class="product-slider-4items gp10 arwOut5 grid-products" dir="ltr">
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0"><img
                                        class="rounded-0 blur-up lazyload"
                                        src="{{ asset('storage/images/products/product1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" /></a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">فروش</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="فروشگاه سریع"><i
                                                class="icon anm anm-cart-l"></i><span class="text">فروشگاه
                                                سریع</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price">114 هزار</span><span class="price">99 هزار</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">3 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product2.jpg') }}"
                                        src="{{ asset('storage/images/products/product2.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product2-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product2-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="گزینه مورد نظر را انتخاب کنید"><i
                                                class ="icon anm anm-cart-l"></i><span class="text">گزینه ها را انتخاب
                                                کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="به لیست علاقه مندی ها اضافه کنید"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                    <span class="caption hidden ms-1">8 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product3.jpg') }}"
                                        src="{{ asset('storage/images/products/product3.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
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
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="به سبد خرید اضافه کنید"><i
                                                class="icon anm anm-cart-l"></i><span class="text">به سبد خرید اضافه
                                                کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                    <span class="caption hidden ms-1">10 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product4.jpg') }}"
                                        src="{{ asset('storage/images/products/product4.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product4-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product4-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="به سبد خرید اضافه کنید"><i
                                                class="icon anm anm-cart-l"></i><span class="text">به سبد خرید اضافه
                                                کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                    <span class="caption hidden ms-1">0 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product5.jpg') }}"
                                        src="{{ asset('storage/images/products/product5.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
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
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="به سبد خرید اضافه کنید"><i
                                                class="icon anm anm-cart-l"></i><span class="text">به سبد خرید اضافه
                                                کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
                <!--End Product Grid-->
            </div>
        </section>
        <!--End Related Products-->

        <!--Recently Viewed Products-->
        <section class="section product-slider pb-0">
            <div class="container">
                <div class="section-header">
                    <p class="mb-1 mt-0">مرور پرفروش</p>
                    <h2>شما هم ممکن است بپسندید</h2>
                </div>

                <!--Product Grid-->
                <div class="product-slider-4items gp10 arwOut5 grid-products" dir="ltr">
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product6.jpg') }}"
                                        src="{{ asset('storage/images/products/product6.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
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
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#addtocart-modal"
                                        class="btn-icon addtocart add-to-cart-modal soldOutBtn disabled"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="تمام شده"><i
                                                class="icon anm anm-cart-l"></i><span class="text">به سبد خرید اضافه
                                                کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="مشاهده سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                        data-src="{{ asset('storage/images/products/product7.jpg') }}"
                                        src="{{ asset('storage/images/products/product7.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product7-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product7-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
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
                                            title="به سبد خرید اضافه کنید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">به سبد خرید اضافه کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                    <span class="caption hidden ms-1">11 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product8.jpg') }}"
                                        src="{{ asset('storage/images/products/product8.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product8-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product8-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
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
                                            title="به سبد خرید اضافه کنید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">به سبد خرید اضافه کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                    <span class="caption hidden ms-1">0 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product9.jpg') }}"
                                        src="{{ asset('storage/images/products/product9.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product9-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product9-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
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
                                            title="به سبد خرید اضافه کنید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">به سبد خرید اضافه کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">19 بررسی</span>
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
                                        data-src="{{ asset('storage/images/products/product10.jpg') }}"
                                        src="{{ asset('storage/images/products/product10.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product10-1.jpg') }}"
                                        src="{{ asset('storage/images/products/product10-1.jpg') }}" alt="محصول"
                                        title="محصول" width="625" height="808" />
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
                                            title="به سبد خرید اضافه کنید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">به سبد خرید اضافه کنید</span></span>
                                    </a>
                                    <!--End Cart Button-->
                                    <!--Quick View Button-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">مشاهده
                                                سریع</span></span>
                                    </a>
                                    <!--End Quick View Button-->
                                    <!--Wishlist Button-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--End Wishlist Button-->
                                    <!--Compare Button-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن برای مقایسه"><i
                                            class="icon anm anm-random-r"></i><span class="text">افزودن برای
                                            مقایسه</span></a>
                                    <!--End Compare Button-->
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End Product Image -->
                            <!-- Start Product Details -->
                            <div class="product-details text-right">
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
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i>
                                    <span class="caption hidden ms-1">7 بررسی</span>
                                </div>
                                <!-- End Product Review -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
                <!--End Product Grid-->
            </div>
        </section>
        <!--End Recently Viewed Products-->
    </div>

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

    <!-- Size Chart Modal -->
    <div class="sizechart-modal modal fade" id="sizechart_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="sizechart" class="sizechart-wrap text-center">
                        <h4 class="mb-2">راهنمای اندازه</h4>
                        <p class="mb-4">این یک راهنمای استاندارد است تا به شما ایده دهد که به چه اندازه ای نیاز دارید،
                            با این حال برخی از مارک ها ممکن است با این تبدیل ها متفاوت باشند.</p>
                        <div class="size-chart-tbl table-responsive px-1">
                            <table class="table-bordered align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>اندازه</th>
                                        <th>XXS - XS</th>
                                        <th>XS - S</th>
                                        <th>S - M</th>
                                        <th>M - L</th>
                                        <th>L - XL</th>
                                        <th>XL - XXL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>انگلستان</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>US</th>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th>ایتالیا (IT)</th>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <th>فرانسه (FR/EU)</th>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <th>دانمارک</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>روسیه</th>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <th>آلمان</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>ژاپن</th>
                                        <td>5</td>
                                        <td>7</td>
                                        <td>9</td>
                                        <td>11</td>
                                        <td>13</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>استرالیا</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>کشور کره</th>
                                        <td>33</td>
                                        <td>44</td>
                                        <td>55</td>
                                        <td>66</td>
                                        <td>77</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <th>چین</th>
                                        <td>160/84</td>
                                        <td>165/86</td>
                                        <td>170/88</td>
                                        <td>175/90</td>
                                        <td>180/92</td>
                                        <td>185/94</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Size Chart Modal -->

    <!-- Shipping Modal -->
    <div class="shippingInfo-modal modal fade" id="shippingInfo_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="ShippingInfo" class="shippingInfo-wrap">
                        <h4 class="pb-1">تحویل</h4>
                        <ul class="checkmark-info mb-3">
                            <li>ارسال: ظرف 24 ساعت</li>
                            <li>1 سال گارانتی برند</li>
                            <li>ارسال رایگان برای همه محصولات با حداقل خرید 50 تومان </li>
                            <li>زمان تحویل بین المللی - 7-10 روز کاری</li>
                            <li>ممکن است پول نقد هنگام تحویل موجود باشد</li>
                            <li>بازگرداندن و مبادله آسان 30 روزه</li>
                            <li>همه سفارش‌ها با ارسال می‌شوند</li>
                            <li>همه سفارش‌ها با شماره رهگیری UPS ارسال می‌شوند</li>
                        </ul>
                        <h4 class="pt-1">برمی‌گرداند</h4>
                        <p>اگر محصول را دوست ندارید، می توانید ظرف 15 روز آن را برگردانید - بدون سوال. این شامل لباس های
                            بدن، لباس شنا و اقلام فروش ترخیص نمی شود. ما یک سیاست بازگشت آسان و بدون دردسر داریم. لطفاً برای
                            اطلاعات بیشتر به بخش تحویل و برگشت ما مراجعه کنید.</p>
                        <h4 class="pt-1">راهنما</h4>
                        <ul class="list-info">
                            <li>اگر سؤال و/یا نگرانی دیگری دارید با ما تماس بگیرید.</li>
                            <li class="my-1"><strong>ایمیل:</strong> <a href="mailto:contact@example.com"><span
                                        class="email">contact@example.com</span> </a></li>
                            <li><strong>تلفن:</strong> <a href="tel:401234567890">6789 345 912 98+</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Shipping Modal-->

    <!--Product Enuiry Modal-->
    <div class="productInquiry-modal modal fade" id="productInquiry_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="productInquiry" class="productInquiry-wrap">
                        <div class="page-title">
                            <h3 class="mb-3">پنجره استعلام محصول</h3>
                        </div>
                        <form method="post" action="#" id="productInquiry_form"
                            class="productInquiry-form form-vertical">
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" id="ContactFormName" name="contact[name]"
                                            placeholder="نام" value="" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" id="ContactFormEmail" name="contact[email]"
                                            placeholder="پست الکترونیک" value="" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" id="ContactFormPhone" name="contact[phone]"
                                            pattern="[0-9\-]*" placeholder="شماره تلفن" value="" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" id="ContactFormSubject" name="contact[subject]"
                                            placeholder="موضوع" value="" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="4" id="ContactFormMessage" name="contact[body]" placeholder="پیام" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn btn-lg w-100" value="پیام فرستادن" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Product Enuiry Modal-->

    <!--Product Video Modal-->
    <div class="productVideo-modal modal fade" id="productVideo_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="ratio ratio-16x9 productVideo-wrap">
                        <iframe class="rounded-0" src="https://www.youtube.com/embed/93A2jOW5Mog?rel=0"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Product Video Modal-->

    <!-- Sticky Cart -->
    <div class="stickyCart">
        <div class="container">
            <form method="post" action="#" id="stickycart-form" class="d-flex-center justify-content-center">
                <div class="product-featured-img"><img class="blur-up lazyload"
                        data-src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                        src="{{ asset('storage/images/products/product1-120x170.jpg') }}" alt="محصول"
                        width="120" height="170" /></div>
                <div class="sticky-title me-2 pe-1 ps-5">پیراهن کوبایی آکسفورد</div>
                <div class="stickyOptions position-relative">
                    <div class="selectedOpt">قرمز / S - <span class="money">130 هزار</span></div>
                    <ul>
                        <li class="vrOpt" data-val="31677941252156" data-no="0">قرمز / S - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941383228" data-no="1">قرمز / M - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941514300" data-no="2">سبز / L - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941678140" data-no="3">سبز / XL - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941284924" data-no="4">صورتی / S - 104 هزار</li>
                        <li class="vrOpt" data-val="31677941415996" data-no="5">صورتی / M - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941579836" data-no="6">هلو / L - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941710908" data-no="7">هلو / XL - 130 هزار</li>
                        <li class="soldout">سفید / S - فروخته شده</li>
                        <li class="vrOpt" data-val="31677941481532" data-no="9">سفید / M - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941612604" data-no="10">آبی / L - 130 هزار</li>
                        <li class="vrOpt" data-val="31677941776444" data-no="11">آبی / XL - 130 هزار</li>
                    </ul>
                </div>
                <select name="id" id="variantOptions1"
                    class="product-form__variants selectbox no-js d-none ms-3">
                    <option selected="selected" value="31677941252156">قرمز / S</option>
                    <option value="31677941383228">قرمز / S</option>
                    <option value="31677941514300">قرمز / M</option>
                    <option value="31677941678140">سبز / XL</option>
                    <option value="31677941284924">صورتی / S</option>
                    <option value="31677941415996">صورتی / M</option>
                    <option value="31677941579836">هلو / L</option>
                    <option value="31677941710908">هلو / XL</option>
                    <option disabled="disabled">سفید / S - فروخته شده</option>
                    <option value="31677941481532">سفید / M</option>
                    <option value="31677941612604">آبی / L</option>
                    <option value="31677941776444">آبی / XL</option>
                </select>

                <div class="qtyField mx-2">
                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                    <input type="text" name="quantity" value="1" class="product-form-input qty" />
                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                </div>
                <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit">
                    <span>به سبد خرید اضافه کنید</span>
                </button>
            </form>
        </div>
    </div>
    <!-- End Sticky Cart -->

    <!-- Elevatezoom Zoom -->
    <div class="pswp" tabindex="-1" role="dialog">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="بستن (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="اشتراک گذاری"></button>
                    <button class="pswp__button pswp__button--fs" title="تمام صفحه را تغییر دهید"></button>
                    <button class="pswp__button pswp__button--zoom" title="بزرگنمایی/کوچکنمایی"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="قبلی (پیکان سمت چپ)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="بعدی (پیکان سمت راست)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Elevatezoom Zoom -->

@endsection

@section('js')
    <!-- Elevatezoom Zoom -->
    <script src="{{ Vite::asset('resources/js/vendor/jquery.elevatezoom.js') }}"></script>


    <script>
        $(document).ready(function() {
            /* Product Zoom */
            function product_zoom() {
                $(".zoompro").elevateZoom({
                    gallery: "gallery",
                    galleryActiveClass: "active",
                    zoomWindowWidth: 300,
                    zoomWindowHeight: 100,
                    scrollZoom: false,
                    zoomType: "inner",
                    cursor: "crosshair"
                });
            }
            product_zoom();
        });
    </script>

    <!-- Photoswipe Gallery JS -->
    <script src="{{ Vite::asset('resources/js/vendor/photoswipe.min.js') }}"></script>
    <script>
        $(function() {
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href = $(this).attr('href'),
                            $size = $(this).data('size').split('x'),
                            item = {
                                src: $href,
                                w: $size[0],
                                h: $size[1]
                            };
                        items.push(item);
                    });
                    return items;
                };
            var items = getItems();

            $.each(items, function(index, value) {
                image[index] = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function(event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index - 1;

                var options = {
                    index: $index,
                    bgOpacity: 0.7,
                    showHideOpacity: true
                };
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
@endsection
