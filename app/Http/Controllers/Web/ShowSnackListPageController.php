<?php

namespace App\Http\Controllers\Web;

use App\Actions\Snack\ListSnackAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowSnackListPageController extends Controller
{
    public function __construct(
        protected ListSnackAction $listSnackAction,
    ) {
    }
    public function __invoke(): View
    {
        $snacks = $this->listSnackAction->execute();

        return view('pages.snack.list', compact('snacks'));
    }
}
