<?php

declare(strict_types=1);

namespace App\Utilities\CharacterFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;
use Jenssegers\Mongodb\Eloquent\Builder;

class HasBloodDemonArt extends QueryFilter implements FilterContract
{
    public function handle(mixed $value): void
    {
        $this->query->when(
            $value,
            fn (Builder $q) => $q->whereNotNull('bloodDemonArts'),
            fn (Builder $q) => $q->whereNull('bloodDemonArts'),
        );
    }
}
