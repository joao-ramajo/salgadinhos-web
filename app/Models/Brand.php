<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @param string $name Nome da empresa ou marca
 * @param string $description Descrição da empresa ou marca
 */
class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function snacks(): HasMany
    {
        return $this->hasMany(Snack::class);
    }
}
