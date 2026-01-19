<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowUpdateProfileController extends Controller
{
    public function __invoke()
    {
        return view('profile.edit');
    }
}
