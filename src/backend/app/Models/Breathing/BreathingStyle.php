<?php

namespace App\Models\Breathing;

use App\Models\Character\Character;
use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\BelongsToMany;
use Jenssegers\Mongodb\Relations\EmbedsMany;
use Jenssegers\Mongodb\Relations\HasMany;

class BreathingStyle extends Model
{
    use HasFactory;

    public const FILTERS_NAMESPACE = 'App\Utilities\BreathingStyleFilters';

    public $timestamps = false;

    public function parentStyle(): BelongsTo
    {
        return $this->belongsTo(BreathingStyle::class, 'parent_id');
    }

    public function childStyles(): HasMany
    {
        return $this->hasMany(BreathingStyle::class, 'parent_id');
    }

    public function techniques(): EmbedsMany
    {
        return $this->embedsMany(BreathingTechnique::class);
    }

    public function knownUsers(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, null, 'user_ids', 'breathing_style_ids');
    }

    public function scopeFilterBy(Builder $query, array $filters): Builder
    {
        return (new FilterBuilder($query, $filters, self::FILTERS_NAMESPACE))->apply();
    }
}
