<?php

namespace App\Http\Controllers\Snack;

use App\Http\Controllers\Controller;
use App\Http\Requests\Snack\CreateSnackRequest;
use App\Models\Snack;

class CreateSnackController extends Controller
{
    public function handle(CreateSnackRequest $request)
    {
        $data = $request->validated();

        $result = Snack::create($data);

        return response()->json([
            'message' => 'criado caralho',
            'data' => $result,
        ], 201);
    }
}
