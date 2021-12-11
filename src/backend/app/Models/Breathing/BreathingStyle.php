<?php

namespace App\Models\Breathing;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BreathingStyle extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    public function parentStyle(): belongsTo
    {
        return $this->belongsTo(BreathingStyle::class, '_parentId');
    }

    public function subStyles(): HasMany
    {
        return $this->hasMany(BreathingStyle::class, '_parentId', '_id');
    }

    public function techniques(): HasMany
    {
        return $this->hasMany(BreathingStyleTechnique::class, '_breathingStyleId');
    }
}
