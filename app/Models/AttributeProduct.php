<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeProduct extends Pivot
{
    use HasFactory;

    protected $table = 'attribute_product';

    protected $fillable = [
        'attribute_id',
        'product_id',
    ];
}
