<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowCreateBrandFormController extends Controller
{
    public function __invoke()
    {
        return view('pages.brands.create');
    }
}
