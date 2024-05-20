<tr class="cart-row cart-flex position-relative">
    <td class="cart-delete text-center small-hide">
        <a href="{{ $order->link }}" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip"   data-bs-placement ="top" title="حذف به سبد خرید"><i class="icon anm anm-times-r"></i></a></td>
    <td class="cart-image cart-flex-item">
        <a href="{{ $order->link }}">
            <img class="cart-image rounded-0 blur-up lazyload"  data-src="{{ $order->img }}"   src="{{ $order->img }}"  alt="{{ $order->name }}" width="120" height="170" /></a>
    </td>
    <td class="cart-meta small-text-right cart-flex-item">
        <div class="list-view-item-title">
            <a href="{{ $order->link }}">{{ $order->name }}</a>
        </div>
        <div class="cart-meta-text">
            @foreach($order->options as $option)
                @foreach ($option as $key=>$value)
                        {{ $key }}:{{ $value }}<br>
                @endforeach
            @endforeach

        </div>
        <div class="cart-price d-md-none">
            <span class="money fw-500">{{ $order->price }}  تومان</span>
        </div>
    </td>
    <td class="cart-price cart-flex-item text-center small-hide">
        <span class="money">{{ $order->sale_price!=0 ? $order->sale_price : $order->price }} تومان</span>
    </td>
    <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
        <div class="cart-qty d-flex justify-content-end justify-content-md-center">
            <div class="qtyField">
                <a class="qtyBtn minus" href="#;"><i  class="icon anm anm-minus-r"></i></a>
                <input class="cart-qty-input qty item-counter basket-items"  name="count" data-product-id="{{ $order->id }}"  value="{{ $order->quantity }}" pattern="[0-9]*" type="number" id="ProductCount" min="1" />
                <a class="qtyBtn plus" href="#;"><i  class="icon anm anm-plus-r"></i></a>
            </div>
        </div>
        <a href="#" title="حذف"
            class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 ms-3">حذف</a>
    </td>
    <td class="cart-price cart-flex-item text-center small-hide">
        <span class="money fw-500">{{ $order->total }} تومان</span>
    </td>
</tr>
