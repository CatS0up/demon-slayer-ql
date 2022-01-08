<?php

declare(strict_types=1);

namespace App\Utilities\CharacterFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;
use Jenssegers\Mongodb\Eloquent\Builder;

class Affiliation extends QueryFilter implements FilterContract
{

    public function handle(mixed $value): void
    {
        $this->query->whereHas(
            'affiliations',
            fn (Builder $q) => $q->whereIn('name', $value)
        );
    }
}
