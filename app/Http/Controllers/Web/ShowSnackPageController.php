<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Snack;
use Illuminate\Http\Request;

class ShowSnackPageController extends Controller
{
    public function __invoke(Snack $snack)
    {
        $comments = Comment::where('snack_id', $snack->id)->get();

        return view('pages.snack.show', compact('snack', 'comments'));
    }
}
