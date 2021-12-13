<?php

namespace App\Models;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Affiliation extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id' => 'string',
        '_parentId' => 'string',
    ];

    public function parentAffilation(): BelongsTo
    {
        return $this->belongsTo(Affiliation::class, '_parentId');
    }

    public function subAffiliations(): HasMany
    {
        return $this->hasMany(Affiliation::class, '_parentId', '_id');
    }
}
