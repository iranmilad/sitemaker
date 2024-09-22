@extends('layouts.app')
@section('title', 'سبد خرید')
@section('body', 'cart-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1> سبد خرید شما</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="main-title"><i class="icon anm anm -angle-left-l"></i> سبد خرید شما</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <div class="row">
                <!--محتوای سبد خرید-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                    <div class="alert alert-success py-2 alert-dismissible fade show cart-alert d-none" role="alert">
                        <i class="align-middle icon anm anm-truck icon-large ms-2"></i><strong class="text-uppercase ">تبریک
                            می‌گوییم!</strong> شما ارسال رایگان دارید!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!--پیام هشدار پایان-->

                    <!--فرم سبد خرید-->
                    <form action="{{ route('removeAllCart') }}" method="post" class="cart-table table-bottom-brd">
                        @csrf
                        <table class="table align-middle">
                            <thead class="cart-row cart-header small-hide position-relative">
                                <tr>
                                    <th class="action">&nbsp;</th>
                                    <th colspan="2" class="text-end">محصول</th>
                                    <th class="text-center">قیمت</th>
                                    <th class="text-center">مقدار</th>
                                    <th class="text-center">مجموع</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders->basket()->items as $order)
                                    <x-cart :order="$order" />
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-end">
                                        هیچ موردی یافت نشد
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>

                                    <td colspan="3" class="text-end">
                                        <button type="submit" name="clear"
                                            class="btn btn-outline-secondary btn-sm small-hide">
                                            <i class="icon anm anm-times-r ms-2 d-none"></i> پاک کردن سبد خرید</button>

                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                    <!--پایان سبد خرید-->

                    <!--یادداشت با برآورد حمل و نقل-->
                    <div class="row my-4 pt-3">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                            <div class="cart-discount">
                                <h5>کدهای تخفیف</h5>
                                @if($orders->basket()->cart->discount_amount > 0)
                                    <div class="alert alert-success mt-3  m-3">
                                        کد تخفیف اعمال شده است.
                                    </div>
                                    <form  action="{{ route('removeDiscount', $orders->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">حذف کد تخفیف</button>
                                    </form>
                                @else
                                    <form action="{{ route('applyDiscount', $orders->id) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="address_zip">اگر کد کوپن خود را دارید وارد کنید.</label>
                                            <div class="input-group0">
                                                <input class="form-control" type="text" name="discount_code" required />
                                                <input type="hidden" name="value" value="{{ $orders->basket()->cart->total }}">
                                                <input type="submit" class="btn text-nowrap mt-3" value="اعمال کوپن" />
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col d-none">
                            <div id="shipping-calculator" class="mt-4 mt-lg-0">
                                <h5>آدرس تحویل کالا</h5>
                                <form class="estimate-form row row-cols-lg-3 row-cols-md-3 row-cols-1" action="#"
                                    method="post">
                                    <div class="form-group">
                                        <label for="address_country">کشور</label>
                                        <select name="country" class="form-select fs-7 country" id="country">
                                            <option value="iran" selected>ایران</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <label for="city" class="form-label fs-7">شهر</label>
                                        <select name="city" class="form-select fs-7 " id="city">
                                            @if ($user->city==null)
                                            <option disabled selected>لطفا ابتدا استان را انتخاب کنید</option>
                                            @else
                                            <option value="{{ old('city', $user->city) }}" selected>{{ $user->city }}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="postal_code">پستی/کد پستی</label>
                                        <input type="text" id="postal_code" name="postal_code" />
                                    </div>



                                    <div class="actionRow d-none">
                                        <input type="button" class="btn btn-secondary get-rates"
                                            value="محاسبه حمل و نقل" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col d-none">
                            <div class="mb-3">
                                <label for="address" class="form-label fs-7">آدرس</label>
                                <textarea name="address" type="address" class="form-control fs-7" id="address" placeholder="آدرس کامل" value="{{ old('address', $user->address) }}" class="form-control cart-note-input" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col d-none">
                            <div class="cart-note mb-4">
                                <h5>یک یادداشت به سفارش خود اضافه کنید</h5>
                                <label for="cart-note">یادداشت هایی درباره سفارش شما، به عنوان مثال. یادداشت های ویژه برای
                                    تحویل.</label>
                                <textarea name="note" id="cart-note" class="form-control cart-note-input" rows="3" required></textarea>
                            </div>
                        </div>

                    </div>
                    <!--پایان یادداشت با برآورد حمل و نقل-->
                </div>
                <!--پایان محتوای سبد خرید-->

                <!--Cart Sidebar-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                    <div class="cart-info sidebar-sticky">
                        <div class="cart-order-detail cart-col">
                            <div class="row g-0 border-bottom pb-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>کالا </strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">{{ $orders->basket()->cart->total }} تومان</span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف کوپن</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">{{ $orders->basket()->cart->discount_amount   }} تومان</span></span>
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

                            <a href="/shipping" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">ادامه
                                به پرداخت</a>

                        </div>
                    </div>
                </div>
                <!--پایان نوار کناری سبد خرید-->
            </div>
        </div>
        <!--پایان محتوای اصلی-->


    </div>
    <!-- End Body Container -->

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

@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // یافتن تمامی دکمه‌های افزایش و کاهش تعداد محصولات
            var plusButtons = document.querySelectorAll('.qtyBtn.plus');
            var minusButtons = document.querySelectorAll('.qtyBtn.minus');

            plusButtons.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    var quantityInput = button.parentNode.querySelector('.cart-qty-input');
                    var productId = quantityInput.dataset.productId;
                    updateCart(productId, parseInt(quantityInput.value) );
                });
            });

            minusButtons.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    var quantityInput = button.parentNode.querySelector('.cart-qty-input');
                    var productId = quantityInput.dataset.productId;
                    var newValue = parseInt(quantityInput.value);
                    if (newValue < 1) return; // تعداد نمی‌تواند کمتر از 1 باشد
                    updateCart(productId, newValue);
                });
            });

            function updateCart(productId, newCount) {
                fetch('/update-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // اطمینان از ارسال توکن CSRF
                    },
                    body: JSON.stringify({
                        id: productId,
                        count: newCount
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    location.reload();
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
            }
        });
    </script>
@endsection
