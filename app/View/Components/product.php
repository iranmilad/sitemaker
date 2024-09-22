<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    public $product;

    /**
     * Create a new component instance.
     *
     * @param  $product
     */
    public function __construct($product = null) {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string|null
    {
        // چک کردن وجود محصول
        if (!$this->product) {
            return null; // بازگرداندن null در صورت عدم وجود محصول
        }

        // اگر محصول وجود داشت، ویو را برگردان
        return view('components.product', [
            'product' => $this->product
        ]);
    }
}
