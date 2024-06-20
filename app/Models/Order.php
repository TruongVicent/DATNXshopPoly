<?php

namespace App\Models;

use App\Enums\PaymentStatus;
use App\Mail\OrderCancelledMail;
use App\Mail\OrderOnHoldMail;
use App\Mail\OrderProcessingMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Enums\OrderStatus;
use Illuminate\Support\Facades\Log;

// Import Log facade
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_address_id',
        'delivery_date',
        'total_price',
        'shipping_unit',
        'user_id',
        'voucher_id',
        'status',
        'payment_method_id',
        'code',
        'created_at',
        'updated_at',
        'shop_id',
        'cancel_reason',
        'on_hold',
        'is_paid',
        'day_paid'
    ];
    protected $casts = [
        'status' => OrderStatus::class, // Cast status field to OrderStatus enum
    ];

    public function ShippingAddress(): BelongsTo
    {
        return $this->BelongsTo(ShippingAddress::class);
    }

    public function UserAddress(): BelongsTo
    {
        return $this->BelongsTo(UserAddress::class);
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

    public function OrderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function calculateTotalPrice()
    {
        $totalPrice = 0;
        if ($this->OrderDetail) {
            foreach ($this->OrderDetail as $detail) {
                $totalPrice += $detail->product->regular_price * $detail->product_quantity;
            }
            $this->total_price = $totalPrice;
        }

    }


    protected static function booted()
    {
        static::created(function ($order) {
            $user = Auth::user();
            if ($user) {
                $order->shop_id = $user->shop_id;
                $order->save();
            }
        });

        static::saving(function ($order) {
            $order->calculateTotalPrice(); // Tính toán tổng tiền trước khi lưu
        });

        static::saved(function ($order) {
            if ($order->status == OrderStatus::Cancelled) {
                Mail::to($order->user->email)->send(new OrderCancelledMail($order, $order->cancel_reason));
            }
            if ($order->is_paid == 1) {
                $order->day_paid = now();
                $order->save();
            }
        });

    }

}
