<div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <form method="post" action="#" id="product-form-quickshop" class="product-form align-items-center">
                    <!-- Product Info -->
                    <div class="row g-0 item mb-3">
                        <a class="col-4 product-image" href="product-layout1.html"><img class="blur-up lazyload" data-src="{{ asset('storage/images/products/fw-product4.jpg')}}" src="{{ asset('storage/images/products/fw-product4.jpg')}}" alt="محصول" title="محصول" width="600" height="600" /></a>
                        <div class="col-8 product-details">
                            <div class="product-variant ps-3">
                                <div class="variant-cart mb-1">کفش</div>
                                <a class="product-title" href="product-layout1.html">کفش های گاه به گاه شیک</a>
                                <div class="priceRow mt-2 mb-3">
                                    <div class="product-price m-0"><span class="old-price">  114.00 تومان</span><span class="price">  99.00 تومان</span></div>
                                </div>
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Info -->
                    <!-- Swatches Color -->
                    <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1" data-option-index="0">
                        <label class="label d-flex justify-content-center">رنگ:<span class="slVariant me-1 fw-bold">مشکی</span></label>
                        <ul class="swatches d-flex-justify-center pt-1 clearfix">
                            <li class="swatch large radius available active"><img src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt = "تصویر" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="آبی" /></li>
                            <li class="swatch large radius available"><img src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt = "تصویر" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="مشکی" /></li>
                            <li class="swatch large radius available"><img src="{{ asset('storage/images/products/swatches/blue-red.jpg')}}" alt = "تصویر" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="صورتی" /></li>
                            <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="سبز"></span></li>
                            <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="زرد"></span></li>
                        </ul>
                    </div>
                    <!-- End Swatches Color -->
                    <!-- Swatches Size -->
                    <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2" data-option-index="1">
                        <label class="label d-flex justify-content-center">اندازه:<span class="slVariant me-1 fw-bold">S</span></label>
                        <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                            <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                            <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                        </ul>
                    </div>
                    <!-- End Swatches Size -->
                    <!-- Product Action -->
                    <div class="product-form-submit d-flex-justify-center">
                        <button type="submit" name="add" class="btn product-cart-submit me-2"><span>افزودن به سبد خرید</span></button>
                        <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none" disabled="disabled">فروخته شده</button>
                        <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">الان بخرش</button>
                    </div>
                    <!-- End Product Action -->
                    <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">مشاهده جزئیات بیشتر</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
