<?php

namespace App\Models;

use App\Models\Snack;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int|null $user_id
 * @property int $snack_id
 * @property string $content
 * @property string|null $nickName
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property-read User|null $user
 * @property-read Snack $snack
 */
class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'snack_id',
        'content',
        'nickname',
    ];

    /**
     * Usuário que criou o comentário (opcional)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Salgadinho relacionado ao comentário
     */
    public function snack(): BelongsTo
    {
        return $this->belongsTo(Snack::class);
    }
}
