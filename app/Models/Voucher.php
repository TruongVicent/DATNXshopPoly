<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $fillable = [
        'name',
        'code',
        'description',
        'usage_limit',
        'max_discount_amount',
        'discount',
        'start_date',
        'expiration',
        'shop_id',
        'voucher_type_id',
    ];

    public function Shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function VoucherType(): BelongsTo
    {
        return $this->belongsTo(VoucherType::class);
    }
}
