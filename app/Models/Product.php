<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'stock', 'price', 'short_description', 'description', 'discount_id'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(CategoryProduct::class, 'category_product_mappings', 'product_id', 'category_product_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(TagProduct::class, 'tag_product_mappings', 'product_id', 'tag_product_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function discount(): BelongsTo
    {
        return $this->belongsTo(DiscountProduct::class, 'discount_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function wishlists(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'wishlists', 'product_id', 'user_id');
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')->withPivot('quantity');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }
}
