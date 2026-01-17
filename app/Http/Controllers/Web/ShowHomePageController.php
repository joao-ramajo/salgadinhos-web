<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowHomePageController extends Controller
{
    public function __invoke(): View
    {
        $recentComments = Comment::with(['snack', 'user'])
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact('recentComments'));
    }
}
