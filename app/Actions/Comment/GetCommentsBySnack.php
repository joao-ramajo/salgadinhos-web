<?php

namespace App\Actions\Comment;

use App\Models\Comment;

class GetCommentsBySnack
{
    public function execute(int $snackId)
    {
        return Comment::where('snack_id', $snackId)->orderBy('created_at', 'desc')->get();
    }
}
