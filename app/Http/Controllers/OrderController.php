<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

use App\Traits\DeliveryTimeTrait;
use Illuminate\Support\Facades\Log;
use App\Models\OrderItemCombination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Traits\ShippingCostAndTimeCalculator;

class OrderController extends Controller
{
    use DeliveryTimeTrait;
    use ShippingCostAndTimeCalculator;

    public function index()
    {
        return view('order');
    }
    public function addToCart(Request $request)
    {
        $param = $request->input('param');

        return Auth::check() ? $this->handleAuthenticatedAddToCart($request, $param) : $this->handleGuestAddToCart($request, $param);
    }
    public function showMiniCart(Request $request)
    {
        //$orders = $this->getAuthenticatedMiniCart($request);
        //$orders = $this->getGuestMiniCart($request);
        $orders = Auth::check() ? $this->getAuthenticatedMiniCart($request) : $this->getGuestMiniCart($request);
        $html = view("components.mini-cart", compact('orders'))->render();

        return response()->json(['html' => $html, 'total' => $orders->cart->count]);

    }
    public function removeItemCart(Request $request)
    {
        $id = $request->input('id');
        return Auth::check() ? $this->removeItemAuthenticated($id) : $this->removeItemGuest($request, $id);
    }
    public function removeAllCart(Request $request)
    {
        $response = ["status" => "success", "message" => "All items removed from cart."];
        return Auth::check() ? $this->removeAllAuthenticatedCart() : $this->removeAllGuestCart($request, $response);
    }


    public function showCart(Request $request)
    {
        $user=Auth::user();
        $orders = $this->getAuthenticatedOrder();
        //dd($orders->basket());
        return view('cart', compact('orders','user'));
    }
    public function cartItemDetail(Request $request, $id)
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first(); // آخرین سفارش سبد خرید کاربر

        // دریافت آیتم‌ها
        $orders = $this->basket($order);

        $data = null;

        foreach($orders->items as $item){
            if($item->id == $id){
                $data = [
                    'name' => $item->name,
                    'price' => $item->price,
                    'sale_price' => $item->sale_price,
                    'discountPercentage' => $item->discountPercentage,
                    'img' => $item->img, // اضافه کردن مقدار img
                    'options' => $item->options
                ];
            }
        }


        if (!$data) {
            return response()->json(['html' => 'Item not found'], 404);
        }

        // رندر ویو و ارسال به صورت API response
        $html = View::make('components/cart-details', $data)->render();

        return response()->json(['html' => $html]);
    }


    public function shipping(Request $request)
    {
        $user = Auth::user();
        $orders = $this->getAuthenticatedOrder();
        return view('shipping', compact('orders', 'user'));
    }

    public function shippingStore(Request $request)
    {
        $validatedData = $request->validate($this->shippingValidationRules());
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $this->store($order, $validatedData);
            $orders = $order->basket();
            return redirect()->route("delivery", compact('orders'));
        }
        return redirect()->route('shipping');
    }

    public function delivery(Request $request, $deliveryType = null)
    {
        $order = $this->getAuthenticatedOrder();

        if ($order) {
            $order->deliveryType = ($deliveryType==null and $order->deliveryType==null) ? 'store_delivery' :$order->deliveryType;
            $order->save();

            // سبد خرید را دریافت کنید
            $basket = $order->basket();

            // محاسبه هزینه و زمان ارسال بر اساس استان و شهر کاربر
            $deliveryOptions = $this->calculateShippingCostAndTime($order);


            // زمان‌های موجود را با توجه به سبد محاسبه کنید
            $availableTime = $this->getAvailableTimeWithBasket($basket);

            // محاسبه هزینه نهایی سبد خرید با هزینه ارسال
            $deliveryCost = $this->deliveryCost($order);
            //dd($basket->cart->total);
            //$orderTotalWithShipping = $basket->cart->total + $deliveryCost;


            $orders = $order;
            // به‌روزرسانی ویو
            return view('delivery', compact('orders', 'availableTime', 'deliveryOptions'));
        }

        return view('shipping', compact('user', 'orders'));
    }


    public function storeDelivery(Request $request)
    {
        //dd($request);
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $order->deliveryType = $request->input('deliveryType');
            $order->shipping_price = $this->deliveryCost($order);

            $order->save();
            $orders = $order->basket();
            return redirect()->route("payment");
        }
        return view('shipping', compact('user', 'orders'));
    }

    public function payment(Request $request, $paymentMethod = null)
    {
        $user = Auth::user();
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $order->paymentMethod = $this->determinePaymentMethod($paymentMethod);
            $order->save();
            $orders = $order;
            return view('payment', compact('user', 'orders'));
        }
        return redirect()->route('shipping');
    }
    public function complete(Request $request)
    {
        $order = $this->getAuthenticatedOrder();
        if ($order) { // Handle order completion logic
            return redirect("https://bankmelat.ir");
        }
        return redirect()->route('shipping');
    }
    private function store($order, $validatedData)
    {
        $data = ['customer_name' => $validatedData['first_name'] . ' ' . $validatedData['last_name'], 'customer_email' => $validatedData['email'], 'customer_phone_number' => $validatedData['mobile'], 'shipping_country' => $validatedData['country'], 'shipping_province' => $validatedData['province'], 'shipping_city' => $validatedData['city'], 'shipping_address' => $validatedData['address'], 'shipping_postal_code' => $validatedData['postal_code'], 'shipping_phone' => $validatedData['mobile'],];
        if (isset($validatedData['sendtoanotheraddress']) && $validatedData['sendtoanotheraddress']) {
            $data['customer_name'] = $validatedData['shipping_first_name'] . ' ' . $validatedData['shipping_last_name'];
            $data['shipping_phone'] = $validatedData['shipping_mobile'];
            $order->is_self_delivery = false;
        } else {
            $order->is_self_delivery = true;
        }
        $order->fill($data);
        $order->save();
        return $order->id;
    }
    private function firstStore()
    {

        $order = new Order();
        $user = Auth::user();
        $order->fill(['user_id' => $user->id, 'is_self_delivery' => true, 'customer_phone_number' => $user->mobile, 'customer_name' => $user->first_name . ' ' . $user->last_name,]);
        $order->save();

        return $order->id;
    }
    private function transferCookie(Request $request, $orderId)
    {
        $orders = $this->basketCookie($request);
        $cartCount = 0;
        $totalPrice = 0;
        $totalDiscountPrice = 0;

        // Get the current cookie data
        $cartItems = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];

        foreach ($orders->items as $item) {
            // Check if the item already exists in the database
            if (!OrderItem::where('id', $item->id)->exists()) {
                // Convert formatted strings to plain numbers
                $price = floatval(str_replace(',', '', $item->price));
                $salePrice = floatval(str_replace(',', '', $item->sale_price));
                $total = floatval(str_replace(',', '', $item->total));

                // Create the OrderItem
                $orderItem = OrderItem::create([
                    'id' => $item->id,
                    'order_id' => $orderId,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'installer' => $item->installer ?? null,
                    'designer' => $item->designer ?? null,
                    'sewing' => $item->sewing ?? null,
                    'price' => $price,
                    'sale_price' => $salePrice,
                    'total' => $total,
                ]);

                // Retrieve the product to process attributes
                $product = Product::find($item->product_id);

                if ($product) {
                    // Process product attributes
                    $attributes = $this->processProductAttributes($item->id, $product, $item->attribute);

                    // Update cart count and total prices
                    $cartCount += $item->quantity;
                    $totalPrice += $attributes['independentPriceAdjustment'] + $attributes['dependentPriceAdjustment'];
                    $totalDiscountPrice += $attributes['independentSalePriceAdjustment'] + $attributes['dependentSalePriceAdjustment'];
                }

                // Remove the item from the cookie
                unset($cartItems[$item->id]);
            }
        }

        // Prepare the response
        $response = response()->json(compact('cartCount', 'totalPrice', 'totalDiscountPrice'));

        // Update the cookie with the remaining items
        $response->cookie('cart', json_encode($cartItems), 60);

        return $response;
    }
    private function basket($order)
    {
        return $order->basket();
    }
    private function basketCookie($request)
    {
        $cartCount = 0;
        $totalPrice = 0;
        $items = [];
        $totalDiscountPrice = 0;
        if ($request->cookie('cart')) {
            $cartItems = json_decode($request->cookie('cart'), true);
            foreach ($cartItems as $key => $cartItem) {
                $productId = $cartItem['product'] ?? null;
                if (!$productId) continue;
                $product = Product::find($productId);
                if (!$product) continue;
                $quantity = $cartItem['quantity'] ?? 1;
                $cartCount += $quantity;
                $attributeData = $this->processProductAttributes(null, $product, $cartItem);
                $basePrice = $product->price;
                $baseSalePrice = $product->sale_price ?? $basePrice;
                $totalAttributePrice = $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment'];
                $totalAttributeSalePrice = $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment'];

                $totalItemPrice = ($baseSalePrice + $totalAttributeSalePrice) * $quantity;
                $totalPrice += $totalItemPrice;
                $items[] = (object)["id" => $key, "product_id" => $product->id, "name" => $product->title, "img" => asset($product->img), "link" => $product->link, "price" => number_format($basePrice + $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment']), "sale_price" => number_format($baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment']), "discountPercentage" => $product->discountPercentage, "quantity" => $quantity, "attribute" => $cartItem, "service" => $product->service, "attributeSeries" => $attributeData['selectedAttributes'], "services" => (object)["sewing" => $product->services()->where('type', 'sewing')->first(), "installer" => $product->services()->where('type', 'installer')->first(), "design" => $product->services()->where('type', 'design')->first(),], "installer" => $cartItem["installer"] ?? null, "sewing" => $cartItem["sewing"] ?? null, "design" => $cartItem["design"] ?? null, "total" => number_format($totalItemPrice), "unavailable" => !$attributeData['independentStockAvailable'] || !$attributeData['dependentStockAvailable'],];
            }
        }
        $orders = (object)["cart" => (object)["count" => $cartCount, "total" => number_format($totalPrice), "totalPayed" => number_format($totalPrice + $totalDiscountPrice),], "items" => $items,];
        return $orders;
    }
    private function deliveryCost($order): int
    {
        return $order->deliveryType === 'home_delivery' ? 250000 : 0;
    }
    private function calculateTotalTime($order): int
    {
        $totalTime = 0;
        $cartItems = $order->orderItems;
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->product;
            if ($product) {
                $attributes = $cartItem->orderAttributeItems;
                $quantity = $cartItem->quantity ?? 1;
                foreach ($attributes as $attribute) {
                    $attributeItem = $attribute->attributeItem;
                    if ($attributeItem) {
                        $totalTime += ($attributeItem->unit_factor === "countable") ? $attributeItem->getTotalTime($attribute->value) : $attributeItem->getTotalTime();
                    }
                }
            }
        }
        return $totalTime;
    }
    private function CalculationNearestTime() {}

    private function calculateDueDates(array $summedAmounts): array
    {
        $currentDate = Jalalian::now(); // آرایه‌ای برای نگهداری تاریخ‌های سررسید و مقادیر
        $totalTimeline = [];
        foreach ($summedAmounts as $month => $amount) { // محاسبه تاریخ سررسید بر اساس فاصله ماه و تاریخ فعلی
            $dueDate = $currentDate->addMonths($month); // اضافه کردن تاریخ و مقدار به timeline کلی
            $totalTimeline[$dueDate->format('Y/m/d')] = (object) ['month' => $dueDate->format('Y/m/d'), 'amount' => $amount,];
        }
        return $totalTimeline;
    }
    private function editCartArray($cartItems,$id,$newKey,$newValue) : array
    {

        if ($cartItems[$id]) {
            if(!is_null($newValue)){
                // اضافه کردن کلید و مقدار جدید به ردیف فعلی
                $cartItems[$id][$newKey] = $newValue;
            }
            else{
                unset($cartItems[$id][$newKey]);
            }
        }

        return $cartItems;
    }

    // Helper Methods
    private function updateCartArray(array $cartItems, array $params, $randomNumber, $remove = false) {
        if (isset($params['installer'])) {
            $cartItems = $this->editCartArray($cartItems, $params['installer'], 'installer', $remove ? null : $randomNumber);
            unset($params["installer"]);
        }

        if (isset($params['sewing'])) {
            $cartItems = $this->editCartArray($cartItems, $params['sewing'], 'sewing', $remove ? null : $randomNumber);
            unset($params["sewing"]);
        }

        if (isset($params['design'])) {
            $cartItems = $this->editCartArray($cartItems, $params['design'], 'design', $remove ? null : $randomNumber);
            unset($params["design"]);
        }

        if (!$remove) {
            $cartItems[$randomNumber] = $params;
        }

        return $cartItems;
    }

    private function handleAuthenticatedAddToCart(Request $request, array $param)
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first() ?: $this->firstStore();
        $product = Product::find($param['product']);
        $randomNumber = rand(1000000, 9999999);

        // زمان پایه محصول
        $baseTime = $product->time_per_unit ?? 0;

        // ایجاد OrderItem
        $orderItem = new OrderItem([
            'id' => $randomNumber,
            'order_id' => $order->id,
            'product_id' => $param['product'],
            'quantity' => $param['quantity'] ?? 1,
            'price' => $product->price,
            'sale_price' => $product->sale_price,
            'total' => ($product->sale_price ?? $product->price) * ($param['quantity'] ?? 1),
        ]);
        $orderItem->save();

        // پردازش ویژگی‌های محصول
        $attributesData = $this->processProductAttributes($orderItem->id, $product, $param);

        // محاسبه زمان هر واحد (با افزودن زمان ویژگی‌ها به زمان پایه)
        $timePerUnit = ($attributesData['time_per_unit'] ?? 0) + $baseTime;

        // محاسبه زمان کل بر اساس تعداد
        $timeTotal = $timePerUnit * ($param['quantity'] ?? 1);

        // به‌روزرسانی زمان در OrderItem
        $orderItem = OrderItem::find($randomNumber);
        $orderItem->time_per_unit = $timePerUnit;
        $orderItem->time_total = $timeTotal;
        $orderItem->price = $product->price + $attributesData['dependentPriceAdjustment'] + $attributesData['independentPriceAdjustment'] ;
        $orderItem->sale_price = ($product->sale_price ?? $product->price) + ($attributesData['dependentSalePriceAdjustment'] ?? $attributesData['dependentPriceAdjustment']) + ($attributesData['independentSalePriceAdjustment'] ?? $attributesData['independentPriceAdjustment']) ;
        $orderItem->total = (($product->sale_price ?? $product->price) + ($attributesData['dependentSalePriceAdjustment'] ?? $attributesData['dependentPriceAdjustment']) + ($attributesData['independentSalePriceAdjustment'] ?? $attributesData['independentPriceAdjustment']) ) * ($param['quantity'] ?? 1);
        $orderItem->save();

        // به‌روزرسانی installer, designer, sewing اگر موجود بود
        if (isset($param['installer']) && $param['installer'] != null) {
            $installerOrderItem = OrderItem::find($param['installer']);
            $installerOrderItem->installer = $randomNumber;
            $installerOrderItem->save();
        }

        if (isset($param['designer']) && $param['designer'] != null) {
            $designerOrderItem = OrderItem::find($param['designer']);
            $designerOrderItem->designer = $randomNumber;
            $designerOrderItem->save();
        }

        if (isset($param['sewing']) && $param['sewing'] != null) {
            $sewingOrderItem = OrderItem::find($param['sewing']);
            $sewingOrderItem->sewing = $randomNumber;
            $sewingOrderItem->save();
        }

        // سبد خرید را به‌روزرسانی کنید
        $orders = $order->basket();

        return response()->json([
            "status" => "success",
            "message" => "محصول با موفقیت به سبد خرید اضافه شد.",
            "cart" => ["count" => $orders->cart->count],
        ]);
    }

    private function processProductAttributes(string $orderItemId = null, Product $product, array $param)
    {
        $basePrice = $product->price;
        $baseSalePrice = $product->sale_price ?? $basePrice;
        $independentAttributes = [];
        $dependentAttributes = [];
        $independentPriceAdjustment = 0;
        $independentSalePriceAdjustment = 0;
        $independentStockAvailable = true;
        $dependentPriceAdjustment = 0;
        $dependentSalePriceAdjustment = 0;
        $dependentStockAvailable = true;
        $selectedAttributes = [];
        $selectedDependentAttributes = [];

        $totalTimePerUnit = 0; // متغیر برای محاسبه‌ی زمان کل هر واحد محصول

        // دسته‌بندی ویژگی‌ها
        foreach ($product->attributes as $attribute) {
            if ($attribute->independent) {
                $independentAttributes[] = $attribute;
            } else {
                $dependentAttributes[] = $attribute;
            }
        }

        // پردازش ویژگی‌های مستقل
        foreach ($independentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;

            if ($selectedValue) {
                $combination = $product->getIndependentCombinationDetails($attribute->id, $selectedValue);

                if ($combination) {
                    $independentPriceAdjustment += $combination->price;
                    $independentSalePriceAdjustment += $combination->sale_price ?? $combination->price;

                    // افزودن زمان تولید هر واحد برای ترکیب مستقل
                    $totalTimePerUnit += $combination->time_per_unit;

                    if ($orderItemId) {
                        OrderItemCombination::create([
                            'order_item_id' => $orderItemId,
                            'combination_id' => $combination->id,
                        ]);
                    }
                } else {
                    $independentStockAvailable = false;
                    break;
                }
            }
        }

        // پردازش ویژگی‌های وابسته
        foreach ($dependentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;
            if ($selectedValue) {
                $selectedDependentAttributes[$attribute->id] = $selectedValue;
            }
        }

        if (!empty($selectedDependentAttributes)) {
            $combination = $product->getCombinationDetails($selectedDependentAttributes);

            if ($combination) {
                $dependentPriceAdjustment += $combination->price;
                $dependentSalePriceAdjustment += $combination->sale_price ?? $combination->price;

                // افزودن زمان تولید هر واحد برای ترکیب وابسته
                $totalTimePerUnit += $combination->time_per_unit;

                if ($orderItemId) {
                    OrderItemCombination::create([
                        'order_item_id' => $orderItemId,
                        'combination_id' => $combination->id,
                    ]);
                }
            } else {
                $dependentStockAvailable = false;
            }
        }

        return [
            'independentPriceAdjustment' => $independentPriceAdjustment,
            'independentSalePriceAdjustment' => $independentSalePriceAdjustment,
            'independentStockAvailable' => $independentStockAvailable,
            'dependentPriceAdjustment' => $dependentPriceAdjustment,
            'dependentSalePriceAdjustment' => $dependentSalePriceAdjustment,
            'dependentStockAvailable' => $dependentStockAvailable,
            'selectedAttributes' => $selectedAttributes,
            'time_per_unit' => $totalTimePerUnit, // بازگرداندن زمان هر واحد
        ];
    }


    private function handleGuestAddToCart(Request $request, array $param)
    {
        $param = $request->input('param');

        $cartItems = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];
        $randomNumber = rand(1000000, 9999999);

        $cartCount = count($cartItems);
        // Update cart items with provided parameters
        $cartItems = $this->updateCartArray($cartItems, $param, $randomNumber);


        // Store the updated cart items in the cookie
        return back()->with([
            "status" => "success",
            "message" => "محصول با موفقیت به سبد خرید اضافه شد.",
            "cart" => ["count" => $cartCount],
        ])->cookie('cart', json_encode($cartItems));

    }
    //Private Methods
    private function getAuthenticatedOrder()
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first();

        if (!$order) {

            $order = $this->firstStore();
        }
        return $order;
    }
    private function getAuthenticatedMiniCart(Request $request)
    {
        $order = $this->getAuthenticatedOrder();
        if ($request->cookie('cart')) {

            $this->transferCookie($request, $order->id);
        }
        return $order->basket();
    }
    private function getGuestMiniCart(Request $request)
    {
        return $this->basketCookie($request);
    }
    // private function removeItemAuthenticated($id) {
    //     $user = Auth::user();
    //     $orderItem = OrderItem::find($id);

    //     if ($orderItem) {
    //         // حذف آیتم اصلی
    //         $orderItem->delete();

    //         // جستجو در تمامی سفارش‌ها برای یافتن آیتم‌هایی که دارای id در ستون sewing, designer یا installer هستند
    //         OrderItem::Where('designer', $id)
    //             ->update(['designer' => null]);

    //         OrderItem::where('sewing', $id)
    //             ->update(['sewing' => null]);

    //         OrderItem::Where('installer', $id)
    //             ->update(['installer' => null]);
    //     }

    //     // دریافت سبد خرید کاربر
    //     $order = $this->getAuthenticatedOrder();
    //     $orders = $order->basket();

    //     // پاسخ JSON
    //     $response = [
    //         "status" => "success",
    //         "message" => "محصول با موفقیت از سبد خرید حذف شد.",
    //         "cart" => ["count" => $orders->cart->count, "total" => $orders->cart->total],
    //         "items" => $orders->items,
    //     ];

    //     return response()->json($response);
    // }


    // private function removeItemGuest(Request $request, $id)
    // {
    //     // Retrieve the cart from the cookie and decode it
    //     $cartItems = json_decode($request->cookie('cart'), true) ?? [];

    //     // Initialize variables for total price and item details
    //     $totalPrice = 0;
    //     $items = [];

    //     // Remove the item from the cart if it exists
    //     if (isset($cartItems[$id])) {
    //         unset($cartItems[$id]);
    //     }

    //     // Process each item in the cart
    //     foreach ($cartItems as $key => $cartItem) {
    //         // Fetch the product based on product ID
    //         $product = Product::find($cartItem['product']);

    //         if ($product) {
    //             // Calculate the base price and sale price
    //             $basePrice = $product->price;
    //             $baseSalePrice = $product->sale_price ?? $basePrice;

    //             // Calculate the final price based on attributes
    //             $attributeData = $this->processProductAttributes(null, $product, $cartItem ?? []);
    //             $finalPrice = $baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment'];

    //             // Update the item's price and total price
    //             $totalItemPrice = $finalPrice * $cartItem['quantity'];
    //             $totalPrice += $totalItemPrice;

    //             // Prepare the item details object
    //             $items[] = (object)[
    //                 "id" => $key,
    //                 "product_id" => $product->id,
    //                 "name" => $product->title,
    //                 "img" => asset($product->img),
    //                 "link" => $product->link,
    //                 "price" => number_format($basePrice + $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment']),
    //                 "sale_price" => number_format($baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment']),
    //                 "discountPercentage" => $product->discountPercentage,
    //                 "quantity" => $cartItem['quantity'],
    //                 "attribute" => array_keys($cartItem),
    //                 "service" => $product->service,
    //                 "attributeSeries" => $attributeData['selectedAttributes'],
    //                 "services" => (object)[
    //                     "sewing" => $product->services()->where('type', 'sewing')->first(),
    //                     "installer" => $product->services()->where('type', 'installer')->first(),
    //                     "design" => $product->services()->where('type', 'design')->first(),
    //                 ],
    //                 "installer" => $cartItem["installer"] ?? null,
    //                 "sewing" => $cartItem["sewing"] ?? null,
    //                 "design" => $cartItem["design"] ?? null,
    //                 "total" => number_format($totalItemPrice),
    //                 "unavailable" => !$attributeData['independentStockAvailable'] || !$attributeData['dependentStockAvailable'],
    //             ];
    //         }
    //     }

    //     // Recalculate the cart count
    //     $cartCount = count($cartItems);

    //     // Prepare the response
    //     $response = [
    //         "status" => "success",
    //         "message" => "محصول با موفقیت از سبد خرید حذف شد.",
    //         "cart" => [
    //             "count" => $cartCount,
    //             "total" => number_format($totalPrice, 2) // Format total price to 2 decimal places
    //         ],
    //         "items" => $items, // Return the updated item details
    //     ];

    //     // Return the updated cart details in the cookie and as a JSON response
    //     return response()->json($response)
    //         ->cookie('cart', json_encode($cartItems), 60 * 24); // Cookie expiry time (1 day)
    // }
    private function removeAllAuthenticatedCart()
    {
        Order::where(['user_id' => Auth::id(), 'status' => 'basket'])->delete();
        return response()->json(["status" => "success", "message" => "All items removed from cart."]);
    }
    private function removeAllGuestCart(Request $request, $response)
    {
        if ($request->cookie('cart')) {
            return response()->json($response)->cookie('cart', null);
        }
        return response()->json($response);
    }
    public function updateCart(Request $request)
    {
        $id = $request->input('id');
        $count = $request->input('count');
        return Auth::check() ? $this->updateCartAuthenticated($id, $count) : $this->updateCartGuest($request, $id, $count);
    }
    private function updateCartAuthenticated($id, $count)
    {
        // پیدا کردن آیتم سفارش بر اساس id
        $orderItem = OrderItem::find($id);
        if ($orderItem) {
            $product = Product::find($orderItem->product_id);

            // اگر محصول یافت شد
            if ($product) {
                // زمان پایه محصول
                $baseTime = $product->time_per_unit ?? 0;

                // پردازش ویژگی‌های محصول برای به‌روزرسانی قیمت‌ها
                $attributesData = $this->processProductAttributes($orderItem->id, $product, ['quantity' => $count]);

                // محاسبه زمان و قیمت
                $timePerUnit = ($attributesData['time_per_unit'] ?? 0) + $baseTime;
                $timeTotal = $timePerUnit * $count;
                $price = $product->price + $attributesData['dependentPriceAdjustment'] + $attributesData['independentPriceAdjustment'];
                $salePrice = ($product->sale_price ?? $product->price) + ($attributesData['dependentSalePriceAdjustment'] ?? $attributesData['dependentPriceAdjustment']) + ($attributesData['independentSalePriceAdjustment'] ?? $attributesData['independentPriceAdjustment']);
                $total = $salePrice * $count;

                // به‌روزرسانی آیتم سفارش با مقادیر جدید
                $orderItem->quantity = $count;
                $orderItem->time_per_unit = $timePerUnit;
                $orderItem->time_total = $timeTotal;
                $orderItem->price = $price;
                $orderItem->sale_price = $salePrice;
                $orderItem->total = $total;
                $orderItem->save();
            }
        }

        // دریافت سبد خرید به‌روزرسانی‌شده
        $order = $this->getAuthenticatedOrder();
        $orders = $order->basket();

        return response()->json([
            "cart" => [
                "count" => $orders->cart->count,
                "total" => $orders->cart->total,
            ],
            "items" => $orders->items,
        ]);
    }
    private function updateCartGuest(Request $request, $id, $count)
    {
        $cookieData = json_decode($request->cookie('cart'), true);
        //log::info($cookieData);
        if (isset($cookieData[$id])) {
            $cookieData[$id]["quantity"] = $count;
            $this->updateCartArray($cookieData, $cookieData[$id], $id);
            $cartData = $this->calculateCartData($cookieData);
            return response()->json($cartData)->cookie('cart', json_encode($cookieData));
        }
        return response()->json(["status" => "error", "message" => "Item not found in cart."]);
    }
    public function getCartItemCount(Request $request)
    {
        //return $this->getGuestCartItemCount($request);
        return Auth::check() ? $this->getAuthenticatedCartItemCount() : $this->getGuestCartItemCount($request);
    }

    private function getAuthenticatedCartItemCount()
    {
        $order = $this->getAuthenticatedOrder();

        $count = $order ? $order->basket()->cart->count : 0;
        return $count;
    }
    private function getGuestCartItemCount(Request $request)
    {
        $cookieData = json_decode($request->cookie('cart'), true);
        $count = $cookieData ? array_sum(array_column($cookieData, 'quantity')) : 0;

        return $count;
    }
    private function determinePaymentMethod($paymentMethod)
    {
        return in_array($paymentMethod, ['online', 'cod']) ? $paymentMethod : 'cod';
    }
    private function shippingValidationRules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string|max:500',
            'postal_code' => 'required|string|size:10', // کد پستی باید دقیقا 10 رقمی باشد
            'note' => 'nullable|string|max:1000', // یادداشت اختیاری است و نباید از 1000 کاراکتر بیشتر شود
            'sendtoanotheraddress' => 'nullable|boolean', // چک‌کردن ارسال به آدرس دیگر

            // اگر کاربر گزینه ارسال به آدرس دیگر را انتخاب کرده باشد:
            'shipping_first_name' => 'nullable|string|max:255',
            'shipping_last_name' => 'nullable|string|max:255',
            'shipping_mobile' => 'nullable|string|max:15',
            'shipping_country' => 'nullable|string',
            'shipping_province' => 'nullable|string',
            'shipping_city' => 'nullable|string',
            'shipping_address' => 'nullable|string|max:500',
            'shipping_postal_code' => 'nullable|string|size:10', // کد پستی باید دقیقا 10 رقمی باشد
        ];
    }

    private function calculateCartData($cartItems)
    {
        $cartCount = 0;
        $totalPrice = 0;
        $items = [];
        $totalDiscountPrice = 0;

        foreach ($cartItems as $key => $cartItem) {
            $productId = $cartItem['product'] ?? null;
            if (!$productId) continue;
            $product = Product::find($productId);
            if (!$product) continue;
            $quantity = $cartItem['quantity'] ?? 1;
            $cartCount += 1;
            $attributeData = $this->processProductAttributes(null, $product, $cartItem);
            $basePrice = $product->price;
            $baseSalePrice = $product->sale_price ?? $basePrice;
            $totalAttributePrice = $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment'];
            $totalAttributeSalePrice = $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment'];

            $totalItemPrice = ($baseSalePrice + $totalAttributeSalePrice) * $quantity;
            $totalPrice += $totalItemPrice;
            $items[] = (object)["id" => $key, "product_id" => $product->id, "name" => $product->title, "img" => asset($product->img), "link" => $product->link, "price" => number_format($basePrice + $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment']), "sale_price" => number_format($baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment']), "discountPercentage" => $product->discountPercentage, "quantity" => $quantity, "attribute" => $cartItem, "service" => $product->service, "attributeSeries" => $attributeData['selectedAttributes'], "services" => (object)["sewing" => $product->services()->where('type', 'sewing')->first(), "installer" => $product->services()->where('type', 'installer')->first(), "design" => $product->services()->where('type', 'design')->first(),], "installer" => $cartItem["installer"] ?? null, "sewing" => $cartItem["sewing"] ?? null, "design" => $cartItem["design"] ?? null, "total" => number_format($totalItemPrice), "unavailable" => !$attributeData['independentStockAvailable'] || !$attributeData['dependentStockAvailable'],];
        }
        return ["count" => $cartCount, "total" => $totalPrice];
    }

    public function removeItem($id)
    {
        // چک کردن اینکه کاربر وارد شده یا مهمان است
        return Auth::check() ? $this->removeItemAuthenticated($id) : $this->removeItemGuest($id);
    }

    private function removeItemAuthenticated($id)
    {
        // حذف آیتم سبد خرید برای کاربر احراز هویت‌شده
        $orderItem = OrderItem::find($id);

        if ($orderItem) {
            $orderItem->delete();

            // آپدیت سایر ستون‌ها مانند sewing, designer, installer
            OrderItem::where('designer', $id)->update(['designer' => null]);
            OrderItem::where('sewing', $id)->update(['sewing' => null]);
            OrderItem::where('installer', $id)->update(['installer' => null]);

            return redirect()->back()->with('success', 'آیتم با موفقیت از سبد خرید حذف شد.');
        }

        return redirect()->back()->with('error', 'آیتم مورد نظر یافت نشد.');
    }

    private function removeItemGuest($id)
    {
        // دریافت سبد خرید از کوکی
        $cartItems = json_decode(request()->cookie('cart'), true) ?? [];

        if (isset($cartItems[$id])) {
            unset($cartItems[$id]);
        }

        // ذخیره سبد خرید جدید در کوکی
        return redirect()->back()
            ->with('success', 'آیتم با موفقیت از سبد خرید حذف شد.')
            ->cookie('cart', json_encode($cartItems), 60 * 24); // ذخیره به مدت 1 روز
    }
}
