<?php

declare(strict_types=1);

namespace App\Utilities;

interface FilterContract
{
    public function handle(mixed $value): void;
}
