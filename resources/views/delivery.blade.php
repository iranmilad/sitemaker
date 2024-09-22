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
                            <h1>روش ارسال</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>روش ارسال</span>
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
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="tab" href="/shipping">آدرس</a>
                            </li>
                            <li class="nav-item onactive">
                                <a class="nav-link  active" data-bs-toggle="tab" href="/delivary">روش ارسال</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="/payment">روش پرداخت</a>
                            </li>


                        </ul>
                    </div>
                    <!--پایان پرداخت مرحله ناو-->

                    <!--برگه محتوای پرداخت-->
                    <div class="tab-content checkout-form">
                        <form action="{{ route('delivery.store') }}" method="post" class="cart-table table-bottom-brd">
                            @csrf

                            <div class="tab-pane fade active show" id="steps2">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <!--روش های ارسال-->
                                        <div class="block mb-3 delivery-methods mb-4">
                                            <div class="block-content">
                                                <h3 class="title mb-3">روش های ارسال</h3>
                                                <div class="delivery-methods-content">
                                                    @foreach ($deliveryOptions as $key => $value)
                                                        <div class="customRadio clearfix">
                                                            <input id="formcheckoutRadio{{ $key }}" value="{{ $key }}" name="deliveryType" type="radio" class="radio" {{ ($orders->deliveryType == $key) ? 'checked' : '' }}>
                                                            <label for="formcheckoutRadio{{ $key }}" class="mb-0">{{ $key }} ({{ $value }} تومان )</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <!--پایان روش های ارسال-->
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
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a type="button" href="/shipping" class="btn btn-secondary btnPrevious ms-1">بازگشت به آدرس تحویل </a>
                                    <button type="submit"  class="btn btn-primary btnNext me-1">بعدی روش پرداخت </button>
                                </div>
                            </div>
                        </form>
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
