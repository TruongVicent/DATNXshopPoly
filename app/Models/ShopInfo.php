<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class ShopInfo extends Model
{
    protected $table = 'shop_infos';
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'name_bank',
        'user_name_bank',
        'number_bank',
        'profile_number',
        'front_side',
        'back_side',
        'portrait_photo',
        'national_id'
    ];

    public function Shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }
    protected static function booted()
    {
        static::created(function ($shopinfo) {
            $user = Auth::user();
            if ($user) {
                $shopinfo->shop_id = $user->shop_id;
                $shopinfo->save();
            }
        });
    }
}
