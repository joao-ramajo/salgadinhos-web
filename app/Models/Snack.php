<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

/**
 * @param string $name
 * @param string $description
 * @param string $flavor
 * @param int $price
 * @param string $image
 * @param int brand_id
 */
class Snack extends Model
{
    /** @use HasFactory<\Database\Factories\SnackFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'flavor',
        'price',
        'image',
        'brand_id'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
