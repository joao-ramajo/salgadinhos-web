<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowHomePageController extends Controller
{
    public function __invoke(): View
    {
        return view('home');
    }
}
