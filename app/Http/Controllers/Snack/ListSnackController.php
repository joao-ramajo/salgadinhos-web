<?php

namespace App\Http\Controllers\Snack;

use App\Actions\Snack\ListSnackAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListSnackController extends Controller
{
    public function __construct(
        public readonly ListSnackAction $listSnackAction
    ) {}

    public function handle(Request $request)
    {
        $perPage = $request->input('per_page', 10);

        $snacks = $this->listSnackAction->handle($perPage);

        return response()->json([
            'message' => 'Salgadinhos listados com sucesso.',
            'data' => $snacks->items(),
            'meta' => [
                'current_page' => $snacks->currentPage(),
                'last_page' => $snacks->lastPage(),
                'per_page' => $snacks->perPage(),
                'total' => $snacks->total(),
            ],
        ]);
    }
}
