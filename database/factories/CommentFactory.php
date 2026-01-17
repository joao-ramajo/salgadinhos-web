<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Snack;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'snack_id' => Snack::factory(),
            'user_id' => null,
            'content' => $this->faker->sentence(12),
        ];
    }

    /**
     * Comentário associado a um usuário
     */
    public function withUser(?User $user = null): self
    {
        return $this->state(fn () => [
            'user_id' => $user?->id ?? User::factory(),
        ]);
    }
}
