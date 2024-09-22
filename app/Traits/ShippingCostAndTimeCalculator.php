<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\Region;
use App\Models\TransportRegion;
use Illuminate\Support\Facades\Log;

trait ShippingCostAndTimeCalculator
{
    /**
     * Calculate shipping cost and delivery time based on the order region and delivery type.
     *

     * @param object $order
     * @return array
     */
    public function calculateShippingCostAndTime($order)
    {
        $title = [];
        $foundRegionCount = 0; // برای شمارش نواحی یافت‌شده

        // دریافت اطلاعات ناحیه (استان و شهر) از مدل Region
        $transportRegions = TransportRegion::all();

        foreach ($order->orderItems as $orderItem) {
            $product = $orderItem->product;
            $cartValue = $orderItem->total;
            $quantity = $orderItem->quantity;
            $weight = $product->weight;
            $dimensions = [
                'length' => $product->length,
                'width' => $product->width,
                'height' => $product->height,
            ];
            $totalCost = 0;
            $regionFoundForItem = false; // برای بررسی وجود منطقه برای هر آیتم سفارش

            // بررسی تطابق شهر و استان با مناطق موجود
            foreach ($transportRegions as $region) {

                // اگر regions خالی بود، منظور همه مناطق است
                if (empty($region->regions) || in_array($order->shipping_city, $region->regions) || in_array($order->shipping_province, $region->regions)) {
                    // مطابقت نوع هزینه حمل‌ونقل با محصول
                    if ($region->cost_type == $product->cost_calculation_class || !$product->cost_calculation_class) {

                        $regionFoundForItem = true; // ناحیه‌ای برای این آیتم سفارش پیدا شد
                        $foundRegionCount++; // شمارش نواحی یافت‌شده برای کل سفارش

                        switch ($region->cost_type) {
                            case 'fixed_rate':
                                $cost = $region->price; // هزینه ثابت
                                break;

                            case 'weight_based':
                                $cost = $this->calculateWeightBasedCost($region, $weight)*$quantity; // محاسبه براساس وزن
                                break;

                            case 'volume_based':
                                $cost = $this->calculateVolumeBasedCost($region, $dimensions)*$quantity; // محاسبه براساس حجم
                                break;

                            case 'value_based':
                                $cost = $this->calculateValueBasedCost($region, $cartValue); // محاسبه براساس ارزش
                                break;

                            default:
                                $cost = 0; // اگر نوع حمل‌ونقل مشخص نبود، هزینه صفر
                        }

                        // هزینه را به عنوان مشابه اضافه کنید
                        if (isset($title[$region->title])) {
                            $title[$region->title] += $cost; // اگر عنوان موجود بود، هزینه را اضافه کنید
                        } else {
                            $title[$region->title] = $cost; // اگر عنوان جدید بود، هزینه را تنظیم کنید
                        }

                        // ادامه نمی‌دهیم چون ناحیه پیدا شده است
                        break;
                    }
                }

            }

            // اگر برای آیتم سفارش ناحیه‌ای پیدا نشد
            if (!$regionFoundForItem) {

                return [
                    'cost' => 0,
                    'error' => "ناحیه‌ای برای آیتم سفارش '{$product->title}' یافت نشد.",
                ];
            }
        }

        // اگر هیچ ناحیه‌ای برای سفارش یافت نشد
        if ($foundRegionCount == 0) {
            return [
                'cost' => 0,
                'error' => 'ناحیه‌ای برای هیچ‌کدام از آیتم‌های سفارش یافت نشد.',
            ];
        }


        return $title;

    }

    /**
     * Calculate the shipping cost based on the delivery type and region.
     *
     * @param Region $region
     * @param string $deliveryType
     * @return float
     */
    private function calculateCostBasedOnDeliveryType($region, $deliveryType)
    {
        // به عنوان مثال: اگر تحویل درب منزل باشد، هزینه بالاتر است
        switch ($deliveryType) {
            case 'home_delivery':
                return $region->home_delivery_cost;
            case 'self_delivery':
                return $region->self_delivery_cost;
            default:
                return 0;
        }
    }

    /**
     * Calculate the delivery time based on the delivery type and region.
     *
     * @param Region $region
     * @param string $deliveryType
     * @return int
     */
    private function calculateDeliveryTime($region, $deliveryType)
    {
        // به عنوان مثال: اگر تحویل درب منزل باشد، زمان بیشتری می‌برد
        switch ($deliveryType) {
            case 'home_delivery':
                return $region->home_delivery_time;
            case 'self_delivery':
                return $region->self_delivery_time;
            default:
                return 0;
        }
    }

    /**
     * Calculate the estimated delivery date based on the current date and delivery time.
     *
     * @param int $deliveryTime
     * @return string
     */
    public function calculateEstimatedDeliveryDate($deliveryTime)
    {
        $currentDate = Carbon::now();
        $estimatedDeliveryDate = $currentDate->addDays($deliveryTime);

        return $estimatedDeliveryDate->toDateString(); // تاریخ تحویل تخمینی
    }

    private function deliveryCost($order)
    {

        if ($order->shipping_city && $order->shipping_province) {
            // دریافت تمامی مناطق حمل‌ونقل
            $transportRegions = TransportRegion::all();

            // متغیر جمع هزینه نهایی
            $totalCost = 0;

            // محاسبه هزینه برای هر آیتم موجود در سفارش
            foreach ($order->orderItems as $orderItem) {
                $product = $orderItem->product;
                $cartValue = $orderItem->total;
                $quantity = $orderItem->quantity;
                $weight = $product->weight;
                $dimensions = [
                    'length' => $product->length,
                    'width' => $product->width,
                    'height' => $product->height,
                ];

                // بررسی تطابق شهر و استان با مناطق موجود
                foreach ($transportRegions as $region) {
                    // اگر regions خالی بود، منظور همه مناطق است
                    if ($region->regions==[] || in_array($order->shipping_city, $region->regions) || in_array($order->shipping_province,$region->regions)) {
                        // مطابقت نوع هزینه حمل‌ونقل با محصول
                        if ($region->cost_type == $product->cost_calculation_class || !$product->cost_calculation_class) {
                            switch ($region->cost_type) {
                                case 'fixed_rate':
                                    $totalCost += $region->price; // هزینه ثابت
                                    break;

                                case 'weight_based':
                                    $totalCost += $this->calculateWeightBasedCost($region, $weight)*$quantity; // محاسبه براساس وزن
                                    break;

                                case 'volume_based':
                                    $totalCost += $this->calculateVolumeBasedCost($region, $dimensions)*$quantity; // محاسبه براساس حجم
                                    break;

                                case 'value_based':
                                    $totalCost += $this->calculateValueBasedCost($region, $cartValue); // محاسبه براساس ارزش
                                    break;

                                default:
                                    $totalCost += 0; // اگر نوع حمل‌ونقل مشخص نبود، هزینه صفر
                            }
                            // یک منطقه تطابق یافت، ادامه نمی‌دهیم
                            break;
                        }
                    }
                }
            }
            return $totalCost;
        }


        // اگر منطقه‌ای یافت نشود یا اطلاعات نامعتبر باشد، هزینه ارسال صفر برمی‌گردد
        return 0;
    }


    private function calculateWeightBasedCost($region, $weight)
    {
        return $region->weight_based_cost * $weight;
    }

    private function calculateValueBasedCost($region, $cartValue)
    {
        return $region->percentage_of_cart_value * $cartValue;
    }

    private function calculateVolumeBasedCost($region, $dimensions)
    {
        $volume = $dimensions['length'] * $dimensions['width'] * $dimensions['height'];
        return $region->dimension_based_cost * $volume;
    }







}
