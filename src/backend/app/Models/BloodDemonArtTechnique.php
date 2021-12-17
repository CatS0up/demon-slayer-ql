<?php

namespace App\Models;

use App\Models\Character\Character;
use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BloodDemonArtTechnique extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
    ];

    public function demon(): BelongsTo
    {
        return $this->belongsTo(Character::class, '_demonId', '_id');
    }
}
