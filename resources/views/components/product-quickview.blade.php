<div>

    <div class="quickview-modal modal fade" id="quickview_modal_{{ $product->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                            <!-- Model Thumbnail -->
                            <div id="quickView" class="carousel slide">
                                <!-- Image Slide carousel items -->
                                <div class="carousel-inner">
                                    @foreach ($product->images as $image)
                                        <div class="item carousel-item {{ $loop->count==1 ? 'active' : ''}}" data-bs-slide-number="{{ $loop->count}}">
                                            <img class="blur-up lazyload" data-src="{{ $image->url }}" alt="{{ $product->title }}" title="{{ $product->title }}" width="600" height="600" />
                                        </div>
                                    @endforeach
                                </div>
                                <!-- End Image Slide carousel items -->
                                <!-- Thumbnail image -->
                                <div class="model-thumbnail-img">
                                    <!-- Thumbnail slide -->
                                    <div class="carousel-indicators list-inline">
                                        @foreach ($product->images as $image)
                                            <div class="list-inline-item {{ $loop->count==1 ? 'active' : ''}}" id="carousel-selector-{{ $loop->count}}" data-bs-slide-to="{{ $loop->count}}" data-bs-target="#quickView">
                                                <img class="blur-up lazyload" data-src="{{ $image->url }}" alt="{{ $product->title }}" title="{{ $product->title }}" width="600" height="600" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- End Thumbnail slide -->
                                    <!-- Carousel arrow button -->
                                    <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon anm anm-angle-left-r"></i></a>
                                    <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon anm anm-angle-right-r"></i></a>
                                    <!-- End Carousel arrow button -->
                                </div>
                                <!-- End Thumbnail image -->
                            </div>
                            <!-- End Model Thumbnail -->
                            <div class="text-center mt-3"><a href="{{ $product->link }}" class="text-link">مشاهده جزئیات بیشتر</a></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="product-arrow d-flex justify-content-between">
                                <h2 class="product-title">{{ $product->title }}</h2>
                            </div>
                            <div class="product-review d-flex mt-0 mb-2">
                                <div class="rating">
                                    @if($product->overallRatingAverage()<=0)
                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    @elseif($product->overallRatingAverage()<=1)
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    @elseif($product->overallRatingAverage()<=2)
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    @elseif($product->overallRatingAverage()<=3)
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    @elseif($product->overallRatingAverage()<=4)
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                    @elseif($product->overallRatingAverage()<=5)
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                    @endif

                                </div>
                                <div class="reviews ms-2"><a href="#">{{ $product->reviews()->count() }} نظرات</a></div>
                            </div>
                            <div class="product-info">
                                <p class="product-vendor d-none">فروشنده:<span class="text"><a href="#">Reebox</a></span></p>
                                <p class="product-type d-none">نوع محصول:<span class="text"> داغ</span></p>
                                <p class="product-sku"><span class="text">{{ $product->holo_code }}</span></p>
                            </div>
                            <div class="pro-stockLbl my-2">
                                <span class="d-flex-center stockLbl instock d-none"><i class="icon anm anm-check-cil"></i><span> موجود است</span></span>
                                <span class="d-flex-center stockLbl preorder d-none"><i class="icon anm anm-clock-r"></i><span> اکنون پیش‌سفارش دهید</span></span>
                                <span class="d-flex-center stockLbl outstock d-none"><i class="icon anm anm-times-cil"></i> <span>فرخته شده</span></span>
                                <span class="d-flex-center stockLbl lowstock" data-qty="{{ $product->few }}"><i class="icon anm anm-exclamation-cir"></i><span> اکنون سفارش دهید، فقط <span class= "items">10</span> باقی مانده است!</span></span>
                            </div>
                            <div class="product-price d-flex-center my-3">
                                <span class="price old-price"> تومان {{ $product->price }}</span>
                                <span class="price"> تومان {{ $product->sale_price }}</span>
                            </div>
                            <div class="sort-description">{{ $product->description }}</div>
                            <form id="product-options" class="product-form">
                                @csrf

                                <input type="hidden" data-real="true" name="param[product]" value="{{ $product->id }}">

                                <div class="product-options d-flex-wrap">
                                    @foreach ($product->attributes()->get() as $attributes)

                                        @if($attributes->display_type =='color' )
                                            @php
                                                $attribute=$attributes;
                                            @endphp

                                                <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="{{ $loop->index }}">
                                                    <label class="label d-flex align-items-center">{{ $attribute->name }}<span class="slVariant me-1 fw-bold"></span></label>
                                                    <ul class="variants-clr swatches d-flex-center pt-1 clearfix" name="param[{{ $attribute->id }}]">
                                                        @foreach($attribute->items()->get() as $item)
                                                            <li class="swatch large radius available {{ $item->name }}  {{ $loop->index==0 ? 'active':'' }}"></li >
                                                        @endforeach
                                                    </ul>
                                                </div>


                                        @endif

                                        @if($attributes->display_type == 'options')
                                            @php
                                                $attribute=$attributes;
                                                $items = $attribute->items;
                                            @endphp
                                            <!-- START: OTHER OPTIONS options-->

                                            <!-- END: OTHER OPTIONS -->


                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="{{ $loop->index }}">
                                                <label class="label d-flex align-items-center">{{$attribute->name}}:</label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix" name="param[{{ $attribute->id }}]">
                                                    @foreach($items as $item)

                                                        <li class="swatch large radius available {{ $loop->index==0 ? 'active':'' }}"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->details }}">{{ $item->details }}</span></li>

                                                    @endforeach
                                                </ul>
                                            </div>

                                        @endif

                                    @endforeach

                                    <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                        <div class="quantity">
                                            <div class="qtyField rounded">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="addtocart ms-3 fl-1">
                                            <button class="btn product-cart-submit w-100 add-to-cart-main-btn"><span>افزودن به سبد خرید</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="wishlist-btn d-flex-center">
                                <a class="add-wishlist d-flex-center me-3" href="/dashboard/product/{{ $product->id }}/add-to-waiting-list" title="افزودن به علاقه مندی ها"><i class="icon anm anm-heart-l me-1"></i> <span>افزودن به علاقه مندی ها</span></a>
                                {{-- <a class="add-compare d-flex-center" href="compare-style1.html" title="افزودن به مقایسه"><i class="icon anm anm-random-r ms-2"></i> <span>افزودن به مقایسه</span></a> --}}
                            </div>
                            <!-- Social Sharing -->
                            <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                <span class="sharing-lbl">اشتراک گذاری :</span>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="اشتراک گذاری در فیس بوک"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">فیس بوک</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="توییت در توییتر"><i class="icon anm anm-twitter"></i><span class="share-title d-none">توییت</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="پین کردن پینترست"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">آن را سنجاق کنید</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="اشتراک گذاری در اینستاگرام"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">اینستاگرام</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="اشتراک گذاری در واتس اپ"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">واتس اپ</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="اشتراک گذاری توسط ایمیل"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">پست الکترونیک</span></a>
                            </div>
                            <!-- End Social Sharing -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
