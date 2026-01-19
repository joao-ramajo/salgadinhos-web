<?php

namespace App\Http\Controllers\Web;

use App\Actions\Comment\CreateCommentAction;
use App\Domain\Comment\CreateCommentInput;
use App\Http\Controllers\Controller;
use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCommentController extends Controller
{
    public function __construct(
        protected CreateCommentAction $createCommentAction,
    ) {
    }

    public function __invoke(Request $request, Snack $snack)
    {
        $request->validate([
            'content' => 'required|string|min:3|max:500',
            'nickname' => 'nullable|string|max:50',
        ]);

        $nickName = Auth::user()->name ?? $request->input('nickname');
        $content  = $request->input('content');

        $userId = Auth::id() ?? null;

        $createCommentInput = CreateCommentInput::create(
            content: $content,
            snackId: $snack->id,
            userId: $userId,
            nickName: $nickName
        );

        $this->createCommentAction->execute($createCommentInput);

        return back()
            ->with('success', 'Comentário salvo com sucesso');
    }
}
