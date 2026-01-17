<?php

namespace App\Http\Controllers\Web;

use App\Actions\Comment\GetCommentsBySnack;
use App\Http\Controllers\Controller;
use App\Models\Snack;

class ShowSnackPageController extends Controller
{
    public function __construct(
        protected GetCommentsBySnack $getCommentsBySnack
    ) {
    }

    public function __invoke(Snack $snack)
    {
        $comments = $this->getCommentsBySnack->execute($snack->id);

        return view('pages.snack.show', compact('snack', 'comments'));
    }
}
