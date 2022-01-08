<?php

declare(strict_types=1);

namespace App\Utilities\BreathingStyleFilters;

use App\Models\Breathing\BreathingStyle;
use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;
use Jenssegers\Mongodb\Eloquent\Builder;

class ParentStyle extends QueryFilter implements FilterContract
{
    public function handle(mixed $value): void
    {
        $this->query->whereRelation('parentStyle', 'name', '=', $value);
    }
}
