<?php

declare(strict_types=1);

namespace App\Utilities\CharacterFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;
use Jenssegers\Mongodb\Eloquent\Builder;

class BreathingStyle extends QueryFilter implements FilterContract
{

    public function handle(mixed $value): void
    {
        $this->query->whereHas(
            'breathingStyles',
            fn (Builder $q) => $q->whereIn('name', $value)
        );
    }
}
