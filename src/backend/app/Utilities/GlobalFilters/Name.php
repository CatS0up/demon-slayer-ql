<?php

declare(strict_types=1);

namespace App\Utilities\GlobalFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class Name extends QueryFilter implements FilterContract
{

    public function handle(mixed $value): void
    {
        $this->query->where('name', 'like', "{$value}%");
    }
}
