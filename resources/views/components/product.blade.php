<div class="product-box">
    <!-- Start Product Image -->
    <div class="product-image">

        <!-- Start Product Image -->
        <a href="{{ $product->link }}" class="product-img"><img class="blur-up lazyload"
                src="{{ $product->img ?: asset('images/image-broken.png') }}" alt="محصول" title="محصول"
                width="600" height="600" /></a>
        <!-- End Product Image -->

        @if (isset($product->is_top) and $product->is_top == true)
            <!-- Product label -->
            <div class="product-labels rounded"><span class="lbl pr-label2"> داغ</span></div>
            <!-- End Product label -->
        @endif

        @if (isset($product->is_special) and $product->is_special == true)
            <!--Countdown Timer-->
            <div class="saleTime d-none" data-countdown="{{ $product->special_time }}"></div>
            <!--End Countdown Timer-->
        @elseif (isset($product->is_new) and $product->is_new == true)
            <!-- Product label -->
            <div class="product-labels rounded"><span class="lbl pr-label3">جدید</span></div>
            <!-- End Product label -->
        @elseif (isset($product->stock) and $product->stock < 3 and $product->stock > 0)
            <!-- Product label -->
            <div class="product-labels"><span class="lbl pr-label4">فقط {{ $product->stock }} موجود</span></div>
            <!-- End Product label -->
        @elseif (isset($product->stock) and $product->stock <= 0)
            <!-- Product label -->
            <div class="product-labels"><span class="lbl on-sale">فروخته شده</span></div>
            <!-- End Product label -->
        @endif

        <!--Product Button-->
        <div class="button-set-top style1">
            <!--Quick View Button-->
            <a href="#quickview-modal_{{$product->id}}" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal"  data-bs-target="#quickview_modal_{{$product->id}}">
                <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="نمایش سریع">
                    <i class="icon anm anm-search-plus-l"></i>
                    <span class="text">نمایش سریع</span>
                </span>
            </a>
            <!--End Quick View Button-->

            <!--Wishlist Button-->
            <a href="/dashboard/product/{{ $product->id }}/add-to-waiting-list" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی ها"><i class="icon anm anm-heart-l"></i><span class="text">افزودن به علاقه مندی ها</span></a>
            <!--End Wishlist Button-->

            <!--Compare Button-->
            {{-- <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به مقایسه"><i class="icon anm anm-random-r"></i><span class="text">افزودن به مقایسه</span></a> --}}
            {{-- <!--End Compare Button--> --}}

        </div>
        <div class="button-set-bottom style1">
            <!--Cart Button-->
            <a href="{{$product->link}}" class="btn btn-secondary">
                <i class="icon anm anm-cart-l me-2"></i><span class="text">مشاهده</span>
            </a>
            <!--End Cart Button-->
        </div>
        <!--End Product Button-->
    </div>
    <!-- End Product Image -->

    <!-- Start Product Details -->
    <div class="product-details text-center">

        <!--Product Vendor-->
        <div class="product-vendor">{{$product->firstCategory()->title ?? null}}</div>
        <!--End Product Vendor-->

        <!-- Product Name -->
        <div class="product-name text-uppercase">
            <a href="{{ $product->link }}">{{ $product->name ?? '' }}</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price"> {{ $product->price ?? '' }} تومان</span>
            @if ($product->discountedPrice)
            <span class="price"> {{ $product->discountedPrice ?? '' }} تومان</span>
            @endif
        </div>
        <!-- End Product Price -->
        <!-- Product Review -->
        <div class="product-review">
            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
            <span class="caption hidden ms-1">3 بررسی ها</span>
        </div>
        <!-- End Product Review -->
    </div>
    <!-- End product details -->
</div>

