<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $flavor
 * @property int $price
 * @property string|null $image
 * @property int $brand_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property-read Brand $brand
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
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
