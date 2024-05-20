@extends('layouts.app')
@section('title', 'تکمیل سفارش')
@section('body', 'checkout-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>شیوه پرداخت یک صفحه ای 2</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>شیوه پرداخت یک صفحه ای 2</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--برنامه پرداخت مرحله ناو-->
                    <div id="nav-tabs" class="step-checkout">
                        <ul class="nav nav-tabs step-items">

                            <li class="nav-item onactive">
                                <a class="nav-link active" data-bs-toggle="tab" href="#steps1">آدرس</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#steps2">پرداخت</a>
                            </li>
                        </ul>
                    </div>
                    <!--پایان پرداخت مرحله ناو-->

                    <!--برگه محتوای پرداخت-->
                    <div class="tab-content checkout-form">

                        <div class="tab-pane fade active show" id="steps1">
                            <!--آدرس حمل و نقل-->
                            <div class="block shipping-address mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">آدرس حمل و نقل</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="firstname" class="form-label">نام <span
                                                        class="required">*</span></label>
                                                <input name="firstname" value="" id="firstname" type="text"
                                                    required class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="lastname" class="form-label">نام خانوادگی <span
                                                        class="required">*</span></label>
                                                <input name="lastname" value="" id="lastname" type="text"
                                                    required class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="email" class="form-label">ایمیل <span
                                                        class="required">*</span></label>
                                                <input name="email" value="" id="email" type="email"
                                                    required class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="phone" class="form-label">تلفن <span
                                                        class="required">*</span></label>
                                                <input name="phone" value="" id="phone" type="tel"
                                                    required class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="address" class="form-label fs-7">آدرس</label>
                                                    <textarea name="address" type="address" class="form-control fs-7" id="address" placeholder="آدرس کامل" value="{{ old('address', $user->address) }}" class="form-control cart-note-input" rows="3" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="postal_code">پستی/کد پستی</label>
                                                <input type="text" id="postal_code" name="postal_code" />
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_country">کشور</label>
                                                <select name="country" class="form-select fs-7 country" id="country">
                                                    <option value="iran" selected>ایران</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_province">استان</label>
                                                <select name="province" class="form-select fs-7 province" id="province" data-province-target="#city">
                                                    @if ($user->province==null)
                                                        <option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>
                                                    @else
                                                        <option value="{{ old('province', $user->province) }}">{{ $user->province }}</option>
                                                        <option value="{{ old('province', $user->province) }}" selected>{{ $user->province }} (پیش فرض)</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="city" class="form-label fs-7">شهر</label>
                                                <select name="city" class="form-select fs-7 " id="city">
                                                    @if ($user->city==null)
                                                    <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                                                    @else
                                                    <option value="{{ old('city', $user->city) }}" selected>{{ $user->city }}</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>
                            </div>
                            <!--آدرس پایان ارسال-->
                            <div class="block shipping-address mb-4">
                                <div class="col-5 mt-3">
                                    <div class="row">
                                        <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                            <input  class="form-input" type="checkbox" value="" name="sendtoanotheraddress" id="sendtoanotheraddress">
                                            <label class="form-label ms-2 fs-7" for="sendtoanotheraddress">
                                                سفارش به آدرس دیگری حمل شود
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--آدرس صورتحساب-->
                                <div id="anotherAddress" style="display: none;">
                                    <div class="row tw-rounded-xl mb-3 tw-mx-auto tw-bg-gray-50 tw-border tw-border-solid tw-border-gray-100">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shipping_first_name" class="form-label fs-7">نام</label>
                                                <input name="shipping_first_name" type="text" class="form-control fs-7" id="shipping_first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shipping_last_name" class="form-label fs-7">نام خانوادگی</label>
                                                <input name="shipping_last_name" type="text" class="form-control fs-7" id="shipping_last_name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="shipping_mobile" class="form-label fs-7">شماره موبایل</label>
                                                <input name="shipping_mobile" type="text" class="form-control fs-7" id="shipping_mobile">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shipping_nationalcode" class="form-label fs-7">کد ملی</label>
                                                <input name="shipping_nationalcode" type="text" class="form-control fs-7" id="shipping_nationalcode">
                                            </div>
                                        </div> -->
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="shipping_country" class="form-label fs-7">کشور</label>
                                                <select name="shipping_country" class="form-select fs-7 shipping_country" id="shipping_country">
                                                    <option value="iran" selected disabled>ایران</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shipping_province" class="form-label fs-7">استان</label>
                                                <select name="shipping_province" class="form-select fs-7 province" id="shipping_province" data-province-target="#shipping_city">
                                                    <option disabled selected>--انتخاب کنید --</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shipping_city" class="form-label fs-7">شهر</label>
                                                <select name="shipping_city" class="form-select fs-7 " id="shipping_city">
                                                    <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                                                    <option value="2">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="shipping_address" class="form-label fs-7">آدرس</label>
                                                <input name="shipping_address" type="text" class="form-control fs-7" id="shipping_address" placeholder="آدرس کامل">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="shipping_postal_code" class="form-label fs-7">کد پستی 10 رقمی (انگلیسی وارد کنید)</label>
                                                <input name="shipping_postal_code" type="text" class="form-control fs-7" id="shipping_postal_code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--آدرس صورتحساب پایانی-->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="note" class="form-label fs-7">یادداشت سفارش (اختیاری)</label>
                                        <textarea class="form-control fs-7" name="note" id="note" cols="30" rows="10" placeholder="یادداشت ها درباره سفارش شما ، برای مثال نکات مهم برای تحویل بار "></textarea>
                                    </div>
                                </div>


                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" href="/cart" class="btn btn-secondary btnPrevious ms-1">بازگشت به سبد خرید </button>
                                <button type="button" href="/delivary" class="btn btn-primary btnNext me-1">بعدی روش پرداخت </button>
                            </div>
                        </div>
                        <div class="tab-pane" id="steps2">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                                    <!--روش های تحویل-->
                                    <div class="block mb-3 delivery-methods mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">روش های تحویل</h3>
                                            <div class="delivery-methods-content">
                                                <div class="customRadio clearfix"><input id="formcheckoutRadio1"
                                                        value="" name="radio1" type="radio" class="radio"
                                                        checked="checked">
                                                    <label for="formcheckoutRadio1" class="mb-0">تحویل استاندارد 2.99
                                                        تومان (3-5 روز)</label>
                                                </div>
                                                <div class="customRadio clearfix">
                                                    <input id="formcheckoutRadio2" value="" name="radio1"
                                                        type="radio" class="radio">
                                                    <label for="formcheckoutRadio2" class="mb-0">تحویل اکسپرس 10.99
                                                        تومان (1-2 روز)</label>
                                                </div>
                                                <div class="customRadio clearfix mb-0">
                                                    <input id="formcheckoutRadio3" value="" name="radio1"
                                                        type="radio" class="radio">
                                                    <label for="formcheckoutRadio3" class="mb-0">20.00 تومان در همان
                                                        روز (تحویل عصر)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان روش های تحویل-->
                                    <!--روش های پرداخت-->
                                    <div class="block mb-3 payment-methods mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">روش های پرداخت</h3>
                                            <div class="payment-accordion-radio">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingOne">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio1" value=""
                                                                        name="payment" type="radio" class="radio"
                                                                        checked="checked" />
                                                                    <label for="paymentRadio1" class="mb-0">پرداخت با
                                                                        کارت اعتباری</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div
                                                                            class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                                            <label for="input-cardname">نام روی کارت <span
                                                                                    class="required">*</span></label>
                                                                            <input name="cardname" value=""
                                                                                placeholder="" id="input-cardname"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                                            <label>نوع کارت اعتباری <span
                                                                                    class="required">*</span></label>
                                                                            <select name="country_id"
                                                                                class="form-control">
                                                                                <option value="">لطفاً انتخاب کنید
                                                                                </option>
                                                                                <option value="1">آمریکن اکسپرس
                                                                                </option>
                                                                                <option value="2">ویزا کارت</option>
                                                                                <option value="3">کارت اصلی</option>
                                                                                <option value="4">کارت کشف</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label for="input-cardno">شماره کارت اعتباری
                                                                                <span class="required">*</span></label>
                                                                            <input name="cardno" value=""
                                                                                placeholder="" id="input-cardno"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label for="input-cvv">کد CVV <span
                                                                                    class="required">*</span></label>
                                                                            <input name="cvv" value=""
                                                                                placeholder="" id="input-cvv"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label>تاریخ انقضا <span
                                                                                    class="required">*</span></label>
                                                                            <input type="text" name="exdate"
                                                                                data-jdp data-jdp-min-date="today"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4 mb-0">
                                                                            <button class="btn btn-primary"
                                                                                type="submit">ارسال</button>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingTwo">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio2" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio2" class="mb-0">پرداخت با
                                                                        پی پال</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>از طریق پی پال پرداخت کنید، اگر حساب پی پال ندارید،
                                                                    می‌توانید با کارت اعتباری خود پرداخت کنید.</p>
                                                                <div class="input-group mb-0 d-flex">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="PayPal@example.com" required>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">پرداخت 99.00 USD</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingThree">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio3" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio3" class="mb-0">پرداخت
                                                                        چک</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>لطفاً چک خود را به نام فروشگاه، خیابان فروشگاه، شهرک
                                                                    فروشگاه، ایالت/شهرستان فروشگاه، کدپستی فروشگاه ارسال
                                                                    کنید.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-0">
                                                        <div class="card-header" id="headingFour">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio4" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio4" class="mb-0">تحویل
                                                                        نقدی</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>نقد هنگام تحویل به ترتیبی اطلاق می‌شود که در آن پرداخت
                                                                    برای خرید مستقیماً توسط خریدار به شخصی که کالا را تحویل
                                                                    می‌دهد انجام می‌شود.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان دادن به روش های پرداخت-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                                    <!--خلاصه سبد خرید-->
                                    <div class="cart-info">
                                        <div class="cart-order-detail cart-col">
                                            <div class="row g-0 border-bottom pb-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>زیر
                                                        مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">226.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف
                                                        کوپن</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">-25.00تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>مالیات</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">10.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>ارسال</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">ارسال رایگان</span></span>
                                            </div>
                                            <div class="row g-0 pt-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                        class="money">311.00 تومان</b></span>
                                            </div>

                                            <a href="order-success.html" id="cartCheckout"
                                                class="btn btn-lg my-4 checkout w-100">ثبت سفارش</a>
                                            <div class="paymnet-img text-center"><img
                                                    src="{{ asset('storage/images/icons/safepayment.png')}}" alt = "پرداخت"
                                                    width="299" height="28" /></div>
                                        </div>
                                    </div>
                                    <!--خلاصه سبد خرید-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--انتهای برگه پرداخت محتوای-->
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection

@section('js')
            <!-- Step checkout JS nav -->
            <script>
                $(document).ready(function(){
                // Add active class to the current list tem (highlight it)
                let checkoutList = document.getElementById("nav-tabs");
                let checkoutItems = checkoutList.getElementsByClassName("nav-item");
                for (let i = 0; i < checkoutItems.length; i++) {
                checkoutItems[i].addEventListener("click", function() {
                let current = document.getElementsByClassName("onactive");
                current[0].className = current[0].className.replace(" onactive", "");
                this.className += " onactive";
                });
                }

                // Nav next/prev
                $('.btnNext').click(function() {
                const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
                const nextTab = new bootstrap.Tab(nextTabLinkEl);
                nextTab.show();
                });
                $('.btnPrevious').click(function() {
                const prevTabLinkEl = $('.nav-tabs .active').closest('li').prev('li').find('a')[0];
                const prevTab = new bootstrap.Tab(prevTabLinkEl);
                prevTab.show();
                });
                });
            </script>
            <script>
                $(document).ready(function() {
                    jalaliDatepicker.startWatch({
                        minDate: "attr",
                        maxDate: "attr",
                        time:true,
                        // date:false
                    });
                    /* Below is a js demo | you don't need to use */
                    setTimeout(function(){
                        let elm=document.getElementById('input[data-jdp-min-date="today"]')[0];
                        elm.focus();
                        jalaliDatepicker.hide();
                        jalaliDatepicker.show(elm);
                    }, 1000);
                });
            </script>
@endsection
