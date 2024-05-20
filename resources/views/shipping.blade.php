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
                            <h1>آدرس تحویل</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>آدرس تحویل</span>
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

                            <li class="nav-item  onactive">
                                <a class="nav-link active" data-bs-toggle="tab" href="/shipping">آدرس</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " data-bs-toggle="tab" href="/delivary">روش ارسال</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="/payment">روش پرداخت</a>
                            </li>

                        </ul>
                    </div>
                    <!--پایان پرداخت مرحله ناو-->

                    <!--برگه محتوای پرداخت-->
                    <div class="tab-content checkout-form">

                        <div class="tab-pane fade active show" id="steps1">
                            <form action="{{ route('shipping.store') }}" method="post" class="cart-table table-bottom-brd">
                                @csrf
                                <!--آدرس حمل و نقل-->
                                <div class="block shipping-address mb-4">
                                    <div class="block-content">
                                        <h3 class="title mb-3">آدرس حمل و نقل</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="first_name" class="form-label">نام <span
                                                            class="required">*</span></label>
                                                    <input name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" type="text"
                                                        required class="form-control">
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="last_name" class="form-label">نام خانوادگی <span
                                                            class="required">*</span></label>
                                                    <input id="last_name"  name="last_name" value="{{ old('last_name', $user->last_name) }}" type="text"  required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="email" class="form-label">ایمیل <span
                                                            class="required">*</span></label>
                                                    <input name="email" type="email" id="email" value="{{ old('email', $user->email) }}" type="email"
                                                        required class="form-control">
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="phone" class="form-label">شماره همراه <span
                                                            class="required">*</span></label>
                                                    <input  type="tel"  required class="form-control" id="mobile" name="mobile" value="{{ old('mobile', $user->mobile) }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label fs-7">آدرس</label>
                                                        <input  type="text" class="form-control fs-7"  placeholder="آدرس کامل" name="address" id="address" placeholder="آدرس کامل" value="{{ old('address', $user->address) }}" class="form-control"  required></input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="postal_code">پستی/کد پستی</label>
                                                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}" />
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


                                <div class="row col-md-12 mt-2">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a type="button" href="/cart" class="btn btn-secondary btnPrevious ms-1">بازگشت به سبد خرید </a>
                                    <button type="submit"  class="btn btn-primary btnNext me-1">ادامه روش ارسال </button>
                                </div>
                            </form>
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
