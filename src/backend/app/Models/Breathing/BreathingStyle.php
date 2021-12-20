<?php

namespace App\Models\Breathing;

use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BreathingStyle extends Model
{
    use HasFactory;

    public function parentStyle(): belongsTo
    {
        return $this->belongsTo(BreathingStyle::class, '_parentId', '_id');
    }

    public function subStyles(): HasMany
    {
        return $this->hasMany(BreathingStyle::class, '_parentId', '_id');
    }

    public function techniques(): HasMany
    {
        return $this->hasMany(BreathingStyleTechnique::class, '_breathingStyleId');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_breathing_styles',
            '_breathingStyleId',
            '_characterId'
        );
    }
}
