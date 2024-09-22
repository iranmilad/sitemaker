{{-- resources/views/components/mini-cart.blade.php --}}
<div>

    @if($orders->cart->count > 0)
        <div class="minicart-header m-3">
            <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="بستن"></i></button>
            <h4 class="fs-6">سبد خرید شما ({{ $orders->cart->count }} مورد)</h4>
        </div>
        <div class="minicart-content">
            <ul class="m-0 clearfix">
                @foreach ($orders->items as $order)
                    <li class="item d-flex justify-content-center align-items-center" data-order-id="{{ $order->id }}">
                        <a class="product-image rounded-0" href="{{ $order->link }}">
                            <img class="rounded-0 blur-up lazyload" data-src="{{ $order->img }}" src="{{ $order->img }}" alt="{{ $order->name }}" title="{{ $order->name }}" width="120" height="170" />
                        </a>
                        <div class="product-details">
                            <a class="product-title" href="{{ $order->link }}">{{ $order->name }} </a>

                            <div class="priceRow">
                                <div class="product-price">
                                    <span class="price">{{ $order->price }} تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="qtyDetail text-center">
                            <div class="qtyField">
                                <!-- دکمه کاهش تعداد -->
                                <a class="qtyBtn minus" href="#" data-id="{{ $order->id }}">
                                    <i class="icon anm anm-minus-r"></i>
                                </a>

                                <!-- input برای نشان دادن تعداد و تغییر آن -->
                                <input type="text" value="{{ $order->quantity }}" class="cart-qty-input qty item-counter basket-items" name="count" data-product-id="{{ $order->id }}">

                                <!-- دکمه افزایش تعداد -->
                                <a class="qtyBtn plus" href="#" data-id="{{ $order->id }}">
                                    <i class="icon anm anm-plus-r"></i>
                                </a>
                            </div>


                            <!-- لینک برای حذف -->
                            <a href="{{ route('cart.remove', ['id' => $order->id]) }}" class="remove">
                                <i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"></i>
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="minicart-bottom">
            <div class="minicart-action d-flex mt-3">

                <a href="/cart" class="cart-btn btn btn-secondary w-100 me-1">مشاهده سبد خرید</a>
            </div>
        </div>


    @else
        <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted">
            <div class="minicart-header d-flex-center justify-content-between w-100">
                <h4 class="fs-6">سبد خرید شما (0 مورد)</h4>
                <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="بستن"></i></button>
            </div>
            <div class="cartEmpty-content mt-4">
                <i class="icon anm anm-cart-l fs-1 text-muted"></i>
                <p class="my-3">هیچ محصولی در سبد خرید وجود ندارد</p>
                <a href="/home" class="btn btn-primary cart-btn">ادامه خرید</a>
            </div>
        </div>
    @endif
</div>
