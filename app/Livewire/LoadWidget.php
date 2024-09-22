<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BlockWidget;

class LoadWidget extends Component
{
    public $blockId; // برای جستجو بر اساس block
    public $id; // برای جستجو بر اساس id
    public $slug; // ورودی غیرالزامی

    protected $rules = [
        'slug' => 'nullable', // اعلام کردن ورودی به عنوان غیرالزامی
    ];

    public function mount($blockId = null, $id = null)
    {
        // تنظیم مقادیر ورودی
        $this->blockId = $blockId;
        $this->id = $id;
    }

    public function render()
    {
        $block = null;

        // بررسی اینکه بر اساس blockId جستجو شود یا id
        if ($this->blockId) {
            $block = BlockWidget::where('block', $this->blockId)->first();
        } elseif ($this->id) {
            $block = BlockWidget::find($this->id);
        }

        // اگر هیچ block یافت نشد
        if (!$block) {
            return view('livewire.load-widget', ['component' => null]);
        }

        // دریافت ویجت مرتبط با بلاک
        $widget = $block->widget;

        if (!$widget) {
            return view('livewire.load-widget', ['component' => null]);
        }

        // استفاده از slug اگر ارسال شده بود
        $slug = $this->slug ?? null;

        // ارسال ویجت و بلاک به ویو
        return view('livewire.load-widget', [
            'component' => $widget->name,
            'block' => $block,
            'slug' => $slug
        ]);
    }
}
