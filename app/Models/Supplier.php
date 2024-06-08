<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'website',
        'shop_id'
    ];
    public function Shop(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }
}
