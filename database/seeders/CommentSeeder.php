<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Snack;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        // Garante que existam snacks
        $snacks = Snack::query()->count() > 0
            ? Snack::all()
            : Snack::factory()->count(10)->create();

        // Garante alguns usuários (opcional, mas útil)
        $users = User::query()->count() > 0
            ? User::all()
            : User::factory()->count(5)->create();

        // Comentários anônimos
        Comment::factory()
            ->count(30)
            ->make()
            ->each(function (Comment $comment) use ($snacks) {
                $comment->snack_id = $snacks->random()->id;
                $comment->save();
            });

        // Comentários com usuário
        Comment::factory()
            ->count(20)
            ->make()
            ->each(function (Comment $comment) use ($snacks, $users) {
                $comment->snack_id = $snacks->random()->id;
                $comment->user_id = $users->random()->id;
                $comment->save();
            });
    }
}
