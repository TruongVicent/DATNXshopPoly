<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductStock extends Model
{
    use HasFactory;

    protected $table = 'product_stocks';
    protected $fillable = [
        'sku',
        'import_price',
        'retail_price',
        'wholesale_price',
        'qty_inventory',
        'product_variation_value_id',
    ];

    public function productVariationValue(): BelongsTo
    {
        return $this->BelongsTo(ProductVariationValue::class);
    }
}
