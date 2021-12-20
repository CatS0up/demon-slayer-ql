<?php

namespace App\Models\Character;

use App\Models\BloodDemonArt;
use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Character extends Model
{
    use HasFactory;
}
