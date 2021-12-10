<?php

namespace App\Models;

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
        return $this->hasMany(BreathingStyle::class, 'parent_uuid', 'uuid')
            ->with('subStyles.subStyles');
    }
}
