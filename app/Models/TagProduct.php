<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TagProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'tag_product_mappings', 'tag_product_id', 'product_id');
    }
}
