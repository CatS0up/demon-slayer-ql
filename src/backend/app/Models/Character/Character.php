<?php

namespace App\Models\Character;

use App\Models\Affiliation;
use App\Models\BloodDemonArtTechnique;
use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Character extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
        '_parentId' => 'string',
    ];

    public function affiliation(): HasOne
    {
        return $this->hasOne(Affiliation::class, '_affiliationId');
    }

    public function breathingStyle(): HasMany
    {
        return $this->hasMany(BreathingStyle::class, '_affiliationId');
    }

    public function relatives(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, '_relativeId');
    }

    public function breathingStyleTechniques(): BelongsToMany
    {
        return $this->belongsToMany(
            BreathingStyleTechnique::class,
            'breathing_style_techniques',
            '_breathingStyleTechniqueId',
            '_characterId'
        );
    }

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(
            Ability::class,
            'character_abilities',
            '_abilityId',
            '_characterId'
        );
    }
}
