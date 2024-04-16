<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'shipping_address_id',
        'delivery_date',
        'total_price',
        'shipping_unit',
        'user_id',
        'voucher_id',
        'status',
        'payment_method_id',
        'code',
        'created_at',
        'updated_at'
    ];
    public function ShippingAddress(): BelongsTo
    {
        return $this->BelongsTo(ShippingAddress::class);
    }

    public function User(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function Voucher(): BelongsTo
    {
        return $this->BelongsTo(Voucher::class);
    }
    public function PaymentMethod(): BelongsTo
    {
        return $this->BelongsTo(PaymentMethod::class);
    }
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_detail_id');
    }
    public function OrderDetail(): BelongsTo
    {
        return $this->BelongsTo(OrderDetail::class);
    }
}
