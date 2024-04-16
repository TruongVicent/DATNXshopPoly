<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $fillable = [
        'order_id',
        'shop_id',
    ];
    public function Order(): BelongsTo
    {
        return $this->BelongsTo(Order::class);
    }
    public function Shop(): BelongsTo
    {
        return $this->BelongsTo(Shop::class);
    }
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_detail_id');
    }
    public function Product(): BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }
}
