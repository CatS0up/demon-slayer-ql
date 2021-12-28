<?php

declare(strict_types=1);

namespace App\Utilities;

use Illuminate\Database\Eloquent\Builder;

abstract class QueryFilter
{
    protected Builder $query;

    public function __construct(Builder $query)
    {
        $this->query = $query;
    }
}
