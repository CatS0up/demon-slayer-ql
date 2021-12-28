<?php

declare(strict_types=1);

namespace App\Utilities;

use Illuminate\Database\Eloquent\Builder;

class FilterBuilder
{
    public const GLOBAL_FILTERS_NAMESPACE = 'App\\Utilities\\GlobalFilters';

    protected Builder $query;
    protected array $filters;
    protected string $namespace;

    public function __construct(Builder $query, array $filters, string $namespace)
    {
        $this->query     = $query;
        $this->filters   = $filters;
        $this->namespace = $namespace;
    }

    public function apply(): Builder
    {
        foreach ($this->filters as $name => $value) {
            $class = $this->buildFilterClassName($this->namespace, $name);

            if (!class_exists($class)) {
                $class = $this->buildFilterClassName(self::GLOBAL_FILTERS_NAMESPACE, $name);

                if (!class_exists($class)) continue;
            };

            (new $class($this->query))->handle($value ?? null);
        }

        return $this->query;
    }

    private function buildFilterClassName(string $namespace, string $filterName): string
    {
        return $namespace . '\\' . ucfirst($filterName);
    }
}
