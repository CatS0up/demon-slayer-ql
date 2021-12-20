<?php

namespace App\Models\Breathing;

use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BreathingStyleTechnique extends Model
{
    use HasFactory;

    public function style(): BelongsTo
    {
        return $this->belongsTo(BreathingStyle::class, '_breathingStyleId', '_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_breathing_style_techniques',
            '_breathingStyleTechniqueId',
            '_characterId'
        );
    }
}
