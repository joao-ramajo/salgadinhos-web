<?php

namespace App\Actions\Snack;

use App\Models\Snack;

class CreateSnackAction
{
    public function __construct(
    ) {}

    public function execute(array $data): void
    {
        Snack::create($data);
    }
}
