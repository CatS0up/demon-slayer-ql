<?php

declare(strict_types=1);

namespace App\GraphQL\Builders;

use App\Models\Breathing\BreathingStyle;
use Illuminate\Database\Eloquent\Builder;

final class BreathingStylesBuilder
{
    private BreathingStyle $breathingStyles;

    public function __construct(BreathingStyle $breathingStyles)
    {
        $this->breathingStyles = $breathingStyles;
    }

    public function filter($root, array $args): Builder
    {
        $filters = $args['filter'] ?? [];

        return $this->breathingStyles
            ->with('techniques')
            ->filterBy($filters);
    }
}
