<?php

namespace App\Actions\Comment;

use App\Models\Comment;
use Illuminate\Pagination\LengthAwarePaginator;

class GetCommentsBySnack
{
    public function execute(int $snackId, int $perPage = 10): LengthAwarePaginator
    {
        return Comment::where('snack_id', $snackId)
            ->orderBy('created_at', 'DESC')
            ->paginate($perPage);
    }
}
