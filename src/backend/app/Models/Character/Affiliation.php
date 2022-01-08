<?php

namespace App\Models\Character;

use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\BelongsToMany;
use Jenssegers\Mongodb\Relations\HasMany;

class Affiliation extends Model
{
    use HasFactory;

    public const FILTERS_NAMESPACE = 'App\Utilities\AffiliationFilters';

    public $timestamps = false;

    public function mainAffiliation(): BelongsTo
    {
        return $this->belongsTo(Affiliation::class, 'parent_id');
    }

    public function subAffiliations(): HasMany
    {
        return $this->hasMany(Affiliation::class, 'parent_id');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, null, 'member_ids', 'affiliation_ids');
    }

    public function scopeFilterBy(Builder $query, array $filters): Builder
    {
        return (new FilterBuilder($query, $filters, self::FILTERS_NAMESPACE))->apply();
    }
}
