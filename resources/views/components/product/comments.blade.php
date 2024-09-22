
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
        <div class="ratings-main">
            <div class="avg-rating d-flex-center mb-3">
                <h4 class="avg-mark">5 / {{ $product->overallRatingAverage() }} </h4>
                <div class="avg-content me-3">
                    <p class="text-rating">میانگین امتیاز</p>
                    <div class="ratings-full product-review" >
                        <a class="reviewLink d-flex-center" href="#reviews">

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
                            </a>
                    </div>
                </div>
            </div>

            <div class="ratings-list">
                @php
                    $rate_0 = $product->countRatings(0);
                    $rate_1 = $product->countRatings(1);
                    $rate_2 = $product->countRatings(2);
                    $rate_3 = $product->countRatings(3);
                    $rate_4 = $product->countRatings(4);
                    $rate_5 = $product->countRatings(5);
                    $total_rate = $rate_0 + $rate_1 + $rate_2 + $rate_3 + $rate_4 + $rate_5;
                    $total_rate = ($total_rate == 0) ? 1 : $total_rate;
                @endphp

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0" style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">


                            <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>

                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_0 / $total_rate * 100 )  }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_0 / $total_rate * 100 )  }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_0 / $total_rate * 100 ) }}%</div>
                </div>

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0"  style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">

                            <i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>

                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_1 / $total_rate * 100 ) }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_1 / $total_rate * 100 ) }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_1 / $total_rate * 100 ) }}%</div>
                </div>

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0"  style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">

                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>

                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_2 / $total_rate * 100 ) }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_2 / $total_rate * 100 ) }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_2 / $total_rate * 100 ) }}%</div>
                </div>

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0"  style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">



                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>



                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_3 / $total_rate * 100 ) }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_3 / $total_rate * 100 ) }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_3 / $total_rate * 100 ) }}%</div>
                </div>

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0"  style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">

                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_4 / $total_rate * 100 ) }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_4 / $total_rate * 100 ) }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_4 / $total_rate * 100 ) }}%</div>
                </div>

                <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0"  style="width: 150px;">
                        <a class="reviewLink d-flex-center" href="#reviews">

                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>

                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($rate_5 / $total_rate * 100 ) }}"  aria-valuemin="0" aria-valuemax="100" style="width:{{ round($rate_5 / $total_rate * 100 ) }};"></div>
                    </div>
                    <div class="progress-value">{{ round($rate_5 / $total_rate * 100 ) }}%</div>
                </div>

            </div>
        </div>
        <hr />
        <livewire:WidgetReviewsList :slug="$product->id" type="new review" options="" />

    </div>
    <livewire:WidgetReviewComments :slug="$product->id" type="template1" options="" />
    {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
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
    </div> --}}
</div>






