<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopFollower extends Model
{
    use HasFactory;

    protected $table = 'shop_user';

    protected $fillable = [
        'user_id',
        'shop_id',
    ];
}
