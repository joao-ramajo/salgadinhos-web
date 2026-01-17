<?php

namespace App\Actions\Comment;

use App\Domain\Comment\CreateCommentInput;
use App\Models\Comment;

class CreateCommentAction
{
    public function execute(CreateCommentInput $input): void
    {
        Comment::create([
            'content' => $input->content,
            'snack_id' => $input->snackId,
            'user_id' => $input->userId
        ]);
    }
}
