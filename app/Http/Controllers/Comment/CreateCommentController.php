<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Snack;
use Illuminate\Http\Request;

class CreateCommentController extends Controller
{
    public function __invoke(Snack $snack)
    {
        return response()
            ->json([
                'message' => 'teste'
            ]);
    }
}
