<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class ShowCreateSnackFormController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();

        return view('pages.snack.create', compact('brands'));
    }
}
