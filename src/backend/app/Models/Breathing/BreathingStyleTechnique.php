<?php

namespace App\Models\Breathing;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreathingStyleTechnique extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;
}
