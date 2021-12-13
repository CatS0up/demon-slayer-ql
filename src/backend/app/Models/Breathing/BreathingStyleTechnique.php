<?php

namespace App\Models\Breathing;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BreathingStyleTechnique extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
    ];

    public function style(): BelongsTo
    {
        return $this->belongsTo(BreathingStyle::class, '_breathingStyleId');
    }
}
