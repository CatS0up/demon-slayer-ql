<?php

declare(strict_types=1);

namespace App\Utilities\AffiliationFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class MainAffiliation extends QueryFilter implements FilterContract
{
    public function handle(mixed $value): void
    {
        $this->query->whereRelation('mainAffiliation', 'name', '=', $value);
    }
}
