<?php

namespace App\Models\Breathing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class BreathingTechnique extends Model
{
    use HasFactory;

    public $timestamps = false;
}
