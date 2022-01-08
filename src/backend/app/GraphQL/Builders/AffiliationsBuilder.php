<?php

declare(strict_types=1);

namespace App\GraphQL\Builders;

use App\Models\Character\Affiliation;
use Illuminate\Database\Eloquent\Builder;

final class AffiliationsBuilder
{
    private Affiliation $affiliation;

    public function __construct(Affiliation $affiliation)
    {
        $this->affiliation = $affiliation;
    }

    public function filter($root, array $args): Builder
    {
        $filters = $args['filter'] ?? [];

        return $this->affiliation
            ->filterBy($filters);
    }
}
