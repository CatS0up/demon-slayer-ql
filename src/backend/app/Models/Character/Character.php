<?php

namespace App\Models\Character;

use App\Models\BloodDemonArtTechnique;
use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Character extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
        '_parentId' => 'string',
    ];

    public function bloodDemonArtTechniques(): HasMany
    {
        return $this->hasMany(BloodDemonArtTechnique::class, '_demonId', '_id');
    }


    public function relatives(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_relatives',
            '_characterId',
            '_relativeId'
        );
    }

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(
            Ability::class,
            'character_abilities',
            '_characterId',
            '_abilityId'
        );
    }

    public function affiliations(): BelongsToMany
    {
        return $this->belongsToMany(
            Affiliation::class,
            'character_affiliations',
            '_characterId',
            '_affiliationId'
        );
    }

    public function breathingStyles(): BelongsToMany
    {
        return $this->belongsToMany(
            BreathingStyle::class,
            'character_breathing_styles',
            '_characterId',
            '_breathingStyleId'
        );
    }

    public function breathingStyleTechniques(): BelongsToMany
    {
        return $this->belongsToMany(
            BreathingStyleTechnique::class,
            'character_breathing_style_techniques',
            '_characterId',
            '_breathingStyleTechniqueId',
        );
    }
}
