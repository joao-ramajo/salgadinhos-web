<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Snack\CreateSnackRequest;
use App\Models\Snack;

class CreateSnackController extends Controller
{
    public function __invoke(CreateSnackRequest $request)
    {
        $data = $request->validated();

        Snack::create($data);

        return back()
            ->with('success', 'Salgadinho registrado com sucesso.');
    }
}
