<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Relations\HasOne;


class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    use HasPanelShield;
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
        'created_by'

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

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'staff') {
            return str_ends_with($this->email, '@gamil.com') && $this->hasVerifiedEmail();
        }

        return true;
    }

    /**
     * model life cycle event listeners
     */

    public static function boot()
    {
        parent::boot(); // Call parent's boot method first

        static::creating(function ($shop) {

            $shop->created_by = Auth::id();
        });
    }
}
