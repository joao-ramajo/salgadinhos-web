<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Snack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ShowUserProfileController extends Controller
{
    public function __invoke(User $user)
    {
        // Estatísticas (públicas)
        $totalComments = Comment::where('user_id', $user->id)->get();

        $snacksReviewed = $user->comments()->distinct('snack_id')->count('snack_id');
        $lastComment = $user->comments()->latest()->first();

        // 3 últimos comentários (públicos)
        $recentComments = $user
            ->comments()
            ->with(['snack'])
            ->latest()
            ->take(3)
            ->get();

        // Todos os salgadinhos com comentários do usuário (públicos)
        $allComments = Snack::whereHas('comments', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->with(['brand', 'comments' => function ($query) use ($user) {
                $query->where('user_id', $user->id)->latest();
            }])
            ->get();

        return view('profile', compact('user', 'totalComments', 'snacksReviewed', 'lastComment', 'recentComments', 'allComments'));
    }
}
