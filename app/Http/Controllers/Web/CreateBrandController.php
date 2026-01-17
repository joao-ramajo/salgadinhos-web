<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class CreateBrandController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Brand::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return back()
            ->with('success', 'Marca registrada com sucesso.');
    }
}
