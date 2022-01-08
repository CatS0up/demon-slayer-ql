<?php

declare(strict_types=1);

namespace App\GraphQL\Builders;

use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Builder;

final class CharactersBuilder
{
    private Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function filter($root, array $args): Builder
    {
        $filters = $args['filter'] ?? [];

        return $this->character
            ->filterBy($filters)
            ->orderBy('name');
    }
}
