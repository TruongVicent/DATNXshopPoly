<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'gender',
        'phone',
        'avatar',
        'province_id',
        'district_id',
        'ward_id',
        'shop_id',
        'verification_code',
        'payment_method',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userAddress(): BelongsTo
    {
        return $this->belongsTo(UserAddress::class);
    }

    public function province(): BelongsTo
    {
        return $this->BelongsTo(Province::class);
    }

    public function district(): BelongsTo
    {
        return $this->BelongsTo(District::class);
    }

    public function ward(): BelongsTo
    {
        return $this->BelongsTo(Ward::class);
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function post(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function review(): HasMany
    {
        return $this->HasMany(Review::class);
    }

    public function like(): HasMany
    {
        return $this->HasMany(Like::class);
    }
}
