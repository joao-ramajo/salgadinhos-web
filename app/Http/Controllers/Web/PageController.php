<?php

namespace App\Http\Controllers\Web;

use App\Actions\Snack\ListSnackAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(
        protected ListSnackAction $listSnackAction,
    ) {}

    public function list(): View
    {
        $snacks = $this->listSnackAction->execute();

        return view('pages.snack.list', compact('snacks'));
    }
}
