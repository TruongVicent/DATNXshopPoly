<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banking extends Model
{
    use HasFactory;
    protected $table = 'banking';
    protected $fillable = [
        'name'
    ];
}
