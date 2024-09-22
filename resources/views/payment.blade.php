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
                            <h1>شیوه پرداخت </h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>شیوه پرداخت</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <form action="{{ route('order.complete') }}" method="post">
                @csrf
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                            <!--برنامه پرداخت مرحله ناو-->
                            <div id="nav-tabs" class="step-checkout">
                                <ul class="nav nav-tabs step-items">

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="/shipping">آدرس</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="/delivary">روش ارسال</a>
                                    </li>
                                    <li class="nav-item onactive">
                                        <a class="nav-link active" data-bs-toggle="tab" href="/payment">روش پرداخت</a>
                                    </li>
                                </ul>
                            </div>
                            <!--پایان پرداخت مرحله ناو-->

                            <!--برگه محتوای پرداخت-->
                            <div class="tab-content checkout-form">

                                <div class="tab-pane fade active show" id="steps1">
                                    <!--روش های پرداخت-->
                                    <div class="block mb-3 payment-methods mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">روش های پرداخت</h3>
                                            <div class="payment-accordion-radio">
                                                <div class="accordion" id="accordionExample">

                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingThree">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio3" value="bank" name="payment_type" type="radio" class="radio"  checked/>
                                                                    <label for="paymentRadio3" class="mb-0">درگاه پرداخت ملت</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>با در دست داشتن تمامی کارت های عضو شبکه شتاب به همراه رمز دوم یکبار مصرف خود همین الان میتوانید هزینه سفارش خود را پرداخت کنید</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-0">
                                                        <div class="card-header" id="headingFour">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio4" value="cod"  name="payment_type" type="radio"  class="radio"  />
                                                                    <label for="paymentRadio4" class="mb-0">پرداخت در محل</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>هزینه ی سرویس های خود را در محل به صورت مستقیم به پیک یا مامور پستی پرداخت کنید</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان دادن به روش های پرداخت-->

                                    <div class="d-flex justify-content-between">
                                        <a type="button" href="/delivery" class="btn btn-secondary btnPrevious ms-1">بازگشت به روش ارسال </a>
                                    </div>
                                </div>

                            </div>
                            <!--انتهای برگه پرداخت محتوای-->
                        </div>

                        <!--Cart Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                            <div class="cart-info sidebar-sticky">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>کالا </strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">{{ $orders->basket()->cart->total  }} تومان</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف کوپن</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">{{ $orders->basket()->cart->discount_amount  }} تومان</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>مالیات</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end">
                                        <span  class="money">{{ $orders->basket()->cart->tax  }} تومان</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>ارسال</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money"> {{ $orders->basket()->cart->deliveryCost  }} تومان</span></span>
                                    </div>
                                    <div class="row g-0 pt-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>مجموع</strong></span>
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                class="money">{{ $orders->basket()->cart->totalPayed }} تومان</b></span>
                                    </div>

                                    <p class="cart-shipping mt-3">ارسال و مالیات محاسبه شده در هنگام تسویه حساب</p>
                                    <p class="cart-shipping fst-normal freeShipclaim d-none"><i class="ms-2 align-middle icon anm anm-truck-l"></i><b>ارسال رایگان</b> واجد شرایط</p>
                                    <div class="customCheckbox cart-tearm">
                                        <input type="checkbox" value="allen-vela" id="cart-tearm" checked>
                                        <label for="cart-tearm">من با شرایط و ضوابط موافقم</label>
                                    </div>
                                    <button  id="cartCheckout" class="btn btn-lg my-4 checkout w-100">پرداخت از طریق درگاه</button>

                                </div>
                            </div>
                        </div>
                        <!--پایان نوار کناری سبد خرید-->

                    </div>
                </div>
        </form>
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
