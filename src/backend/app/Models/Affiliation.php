<?php

namespace App\Models;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Affiliation extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = 'uuid';

    public $timestamps = false;

    public function subAffilations(): HasMany
    {
        return $this->hasMany(Affiliation::class, 'parent_uuid', 'uuid');
    }
}
