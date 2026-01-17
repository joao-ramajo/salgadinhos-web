<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class ShowHomePageController extends Controller
{
    public function __invoke()
    {
        $recentComments = Comment::with(['snack', 'user'])
            ->latest()
            ->take(3)
            ->get();

        /** @var view-string $viewName */
        $viewName = 'pages.home';
        return view($viewName, compact('recentComments'));
    }
}
