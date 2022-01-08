<?php

declare(strict_types=1);

namespace App\Utilities\CharacterFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;
use Jenssegers\Mongodb\Eloquent\Builder;

class HasBreathingStyle extends QueryFilter implements FilterContract
{
    public function handle(mixed $value): void
    {
        $this->query->when(
            $value,
            fn (Builder $q) => $q->has('breathingStyles'),
            fn (Builder $q) => $q->doesntHave('breathingStyles'),
        );
    }
}
