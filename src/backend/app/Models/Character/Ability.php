<?php

namespace App\Models\Character;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ability extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
    ];

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_abilities',
            '_abilityId',
            '_characterId'
        );
    }
}
