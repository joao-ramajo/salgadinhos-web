<?php

namespace App\Actions\Snack;

use App\Models\Snack;
use Illuminate\Pagination\LengthAwarePaginator;

class ListSnackAction
{
    public function handle(int $perPage = 10): LengthAwarePaginator
    {
        return Snack::query()
            ->join('brands', 'brands.id', '=', 'snacks.brand_id')
            ->orderBy('snacks.name')
            ->select([
                'snacks.*',
                'brands.name as brand_name',
            ])
            ->paginate($perPage);
    }
}