<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_detail_id',
        'product_image',
        'product_id',
        'product_price',
        'product_quantity'
    ];
    public function Product(): BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }
}
