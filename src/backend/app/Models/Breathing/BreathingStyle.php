<?php

namespace App\Models\Breathing;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BreathingStyle extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = 'uuid';

    public $timestamps = false;

    public function subStyles(): HasMany
    {
        return $this->hasMany(BreathingStyle::class, 'parentUuid', 'uuid')
            ->with('subStyles.subStyles');
    }

    public function techniques(): HasMany
    {
        return $this->hasMany(BreathingStyleTechnique::class, 'breathingStyleUuid');
    }
}
