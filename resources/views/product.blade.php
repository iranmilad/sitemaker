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
                        {{ Breadcrumbs::render('single.product',$product) }}
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
                                        src="{{ $product->img }}"
                                        data-zoom-image="{{ $product->img }}" alt="محصول"
                                        width="625" height="808" /></div>
                                <!-- End Product Image -->

                                @if (isset($product->is_special) and $product->is_special == true)
                                    <!--Countdown Timer-->
                                    <div class="saleTime d-none" data-countdown="{{ $product->special_time }}"></div>
                                    <!--End Countdown Timer-->
                                @elseif (isset($product->is_new) and $product->is_new == true)
                                    <!-- Product label -->
                                    <div class="product-labels rounded"><span class="lbl pr-label3">جدید</span></div>
                                    <!-- End Product label -->
                                @elseif (isset($product->quantity) and $product->quantity < 3 and $product->quantity > 0)
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl pr-label4">فقط {{ $product->quantity }} موجود</span></div>
                                    <!-- End Product label -->
                                @elseif (isset($product->quantity) and $product->quantity <= 0)
                                    <!-- Product label -->
                                    <div class="product-labels"><span class="lbl on-sale">فروخته شده</span></div>
                                    <!-- End Product label -->
                                @endif

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
                                    @foreach ($product->images as $image)
                                        <a data-image="{{ $image->url }}"
                                            data-zoom-image="{{ $image->url }}"
                                            class="slick-slide slick-cloned active">
                                            <img class="blur-up lazyload"
                                                data-src="{{ $image->url }}"
                                                src="{{ $image->url }}" alt="محصول"
                                                width="625" height="808" />
                                        </a>

                                    @endforeach
                                </div>
                            </div>
                            <!-- End Product Thumb -->

                            <!-- Product Gallery -->
                            <div class="lightboximages">
                                @foreach ($product->images as $image)
                                    <a href="{{ $image->url }}" data-size="1000x1280"></a>
                                @endforeach
                            </div>
                            <!-- End Product Gallery -->
                        </div>
                        <!-- End Product Horizontal -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                        <!-- Product Details -->
                        <div class="product-single-meta">
                            <h2 class="product-main-title">{{$product->title}}</h2>
                            <!-- Product Reviews -->
                            <div class="product-review d-flex-center mb-3">
                                <div class="reviewStar d-flex-center">
                                    <i class="icon anm anm-star"></i>
                                    <i class="icon anm anm-star"></i>
                                    <i class="icon anm anm-star"></i>
                                    <i class="icon anm anm-star"></i>
                                    <i class="icon anm anm-star-o"></i>
                                    <span class="caption me-2">{{count($product->reviews)}}  دیدگاه</span>
                                </div>
                                <a class="reviewLink d-flex-center" href="#reviews">یک نظر بنویسید</a>
                            </div>
                            <!-- End Product Reviews -->
                            <!-- Product Info -->
                            <div class="product-info">
                                <p class="product-stock d-flex">موجودی:
                                    <span class="pro-stockLbl ps-0">
                                        @if (isset($product->quantity) and $product->quantity > 0)
                                            <span class="d-flex-center stockLbl instock text-uppercase">موجود در انبار</span>
                                        @else
                                            <span class="d-flex-center pro-stockLbl outstock icon text-uppercase"> ناموجود </span>
                                        @endif
                                    </span>
                                </p>
                                <p class="product-vendor">دسته بندی:<span class="text"><a href="{{ $product->firstCategory()->link }}">{{$product->firstCategory()->title ?? null}}</a></span>
                                </p>

                                <p class="product-sku">شناسه:<span class="text">{{$product->holo_code ?? $product->id}}</span></p>
                            </div>
                            <!-- End Product Info -->
                            <!-- Product Price -->
                            <div class="product-price d-flex-center my-3">
                                <span class="price old-price">{{$product->price}} تومان</span>
                                @if ($product->sale_price)
                                    <span class="price">{{$product->sale_price}} تومان</span>
                                @endif
                            </div>
                            <!-- End Product Price -->
                            <hr>
                            <!-- Sort Description -->
                            <div class="sort-description">
                                {{$product->description}}
                            </div>
                            <!-- End Sort Description -->
                            <hr class="d-none">
                            <!-- Countdown -->
                            <h3 class="text-uppercase mb-0 d-none">عجله کن! فروش به پایان می رسد</h3>
                            <div class="product-countdown d-flex-center text-center my-3 d-none" data-countdown="2028/12/12"></div>
                            <!-- End Countdown -->
                        </div>
                        <!-- End Product Details -->

                        <!-- Product Form -->
                        <form method="post" action="{{ route('addToCart') }}" class="product-form product-form-border hidedropdown">
                            @csrf

                            <input type="hidden" name="param[product]" value="{{ $product->id }}">
                            <!-- Swatches -->
                            <div class="product-swatches-option">
                                @foreach ($product->attributes()->get() as $attributes)

                                    @if($attributes->display_type =='color' )
                                        @php
                                            $attribute=$attributes;
                                        @endphp

                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="{{ $loop->index }}">
                                            <label class="label d-flex align-items-center">{{ $attribute->name }}<span class="slVariant me-1 fw-bold"></span></label>
                                            <ul class="variants-clr swatches d-flex-center pt-1 clearfix" name="param[{{ $attribute->id }}]">
                                                @foreach($attribute->items()->get() as $item)
                                                    <li class="swatch large radius available {{ $item->name }}  {{ $loop->index==0 ? 'active':'' }}" onclick="updateHiddenInput({{ $attribute->id }},'{{ $item->name }}')"></li >
                                                @endforeach
                                            </ul>
                                            <input type="hidden" name="param[{{ $attribute->id }}]"   value="{{ $attribute->items()->get()->first()->name }}">
                                        </div>
                                    @endif



                                    @if($attributes->display_type == 'options')
                                    @php
                                        $attribute=$attributes;
                                        $items = $attribute->items;
                                    @endphp
                                        <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="{{ $loop->index }}">
                                            <label class="label d-flex align-items-center">{{$attribute->name}}:</label>
                                            <ul class="variants-size size-swatches d-flex-center pt-1 clearfix" name="param[{{ $attribute->id }}]">
                                                @foreach($items as $item)
                                                    <li class="swatch large radius available {{ $loop->index==0 ? 'active':'' }}" onclick="updateHiddenInput({{ $attribute->id }},'{{ $item->name }}')"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->details }}">{{ $item->details }}</span></li>
                                                @endforeach
                                            </ul>
                                            <input type="hidden" name="param[{{ $attribute->id }}]" value="{{ $attribute->items()->get()->first()->name }}">
                                        </div>

                                    @endif
                                @endforeach
                            </div>
                            <!-- End Swatches -->

                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
                                <!-- Product Quantity -->
                                <div class="product-form-quantity d-flex-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                            <input type="text" name="param[quantity]" value="1"  class="product-form-input qty" />
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Quantity -->
                                <!-- Product Add -->
                                <div class="product-form-submit addcart fl-1 me-3">
                                    @if (isset($product->quantity) and $product->quantity > 0)
                                        <button type="submit" name="add"  class="btn product-cart-submit w-100 add-to-cart-main-btn">
                                            <span>به سبد خرید اضافه کنید</span>
                                        </button>
                                    @else
                                        <button type="button" name="add"  class="btn btn-secondary product-form-sold-out" disabled="disabled">
                                            <span>تمام شده</span>
                                        </button>
                                    @endif
                                </div>
                                <!-- Product Add -->

                            </div>
                            <!-- End Product Action -->

                            <!-- Product Info link -->
                            <p class="infolinks d-flex-center justify-content-between">
                                <a class="add-wishlist d-flex-center me-3" href="/wishlist/{{ $product->id }}" title="افزودن به علاقه مندی ها"><i class="icon anm anm-heart-l me-1"></i> <span>افزودن به علاقه مندی ها</span></a>
                            </p>
                            <!-- End Product Info link -->
                        </form>
                        <!-- End Product Form -->

                        <!-- Product Info -->
                        {{-- <div class="userViewMsg featureText" data-user="20" data-time="11000"><i
                                class="icon anm anm-eye-r"></i><b class="uersView">21 </b> مردم به دنبال این محصول هستند
                        </div>
                        <div class="shippingMsg featureText"><i class="icon anm anm-clock-r"></i>تحویل تخمینی بین <b
                                id="fromDate">چهارشنبه، 1 شهریور</b> و <b id ="toDate">سه شنبه، 7 مهر</b>.</div>
                        <div class="freeShipMsg featureText" data-price="199"><i class="icon anm anm-truck-r"></i>خرج شده
                            <b class="freeShip"><span class="money" data-currency-usd="199.00تومان"
                                    data-currency="USD">199 هزار</span></b> موارد بیشتر برای ارسال رایگان</div> --}}
                        <!-- End Product Info -->

                        <!-- Social Sharing -->
                        <div class="social-sharing d-flex-center mt-2 lh-lg d-none">
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



            <!--Product Tabs-->
            <div class="tabs-listing section pb-0">
                <ul class="product-tabs style2 list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                    <li rel="reviews" class="active"><a class="tablink">نظرات</a></li>
                    <li rel="additionalInformation"><a class="tablink">اطلاعات اضافی</a></li>
                    <li rel="size-chart"><a class="tablink">نمودار اندازه</a></li>
                    <li rel="description" ><a class="tablink">توضیحات</a></li>
                </ul>

                <div class="tab-container">


                    <!--Review-->
                    <h3 class="tabs-ac-style d-md-none  active" rel="reviews">نظرات</h3>
                    <div id="reviews" class="tab-content">
                        <x-product.comments :product="$product" />
                    </div>
                    <!--End Review-->

                    <!--Description-->
                    <h3 class="tabs-ac-style d-md-none" rel="description">شرح</h3>
                    <div id="description" class="tab-content">
                        <div class="product-description">
                            <x-product.description :product="$product" />

                        </div>
                    </div>
                    <!--End Description-->

                    <!--Additional Information-->
                    <h3 class="tabs-ac-style d-md-none" rel="additionalInformation">اطلاعات تکمیلی</h3>
                    <div id="additionalInformation" class="tab-content">
                        <div class="product-description">
                            <x-product.specification :product='$product'/>
                        </div>
                    </div>
                    <!--End Additional Information-->

                    <!--Size Chart-->
                    <h3 class="tabs-ac-style d-md-none" rel="size-chart">نمودار اندازه</h3>
                    <div id="size-chart" class="tab-content">
                        <x-product.measure :product="$product" />
                    </div>
                    <!--End Size Chart-->



                </div>
            </div>
            <!--End Product Tabs-->
        </div>
        <!--End Main Content-->

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
    {{-- <div class="stickyCart">
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
    </div> --}}
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

    <script>

        function updateHiddenInput(attributeId, attributeValue) {

            // تنظیم مقدار ویژگی انتخاب شده به عنوان مقدار ورودی مخفی
            document.querySelector('input[name="param[' + attributeId + ']"]').value = attributeValue;
        }


    </script>





@endsection
