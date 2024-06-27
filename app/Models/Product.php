<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'category_id',
        'shop_id',
        'brand_id',
        'name',
        'slug',
        'regular_price',
        'sale_price',
        'sku',
        'rating',
        'view_count',
        'sold_count',
        'description',
        'origin',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
    protected $casts = [
        'meta_keyword' => 'array',
    ];
    public function Supplier(): BelongsTo
    {
        return $this->BelongsTo(Supplier::class);
    }
    public function shop(): BelongsTo
    {
        return $this->BelongsTo(Shop::class);
    }
    public function Category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function Brand(): BelongsTo
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

    public function productMedia(): HasMany
    {
        return $this->HasMany(ProductMedia::class);
    }

    public function productVariation(): HasMany
    {
        return $this->HasMany(ProductVariation::class);
    }

    public function productStock(): HasMany
    {
        return $this->HasMany(ProductStock::class);
    }
}
