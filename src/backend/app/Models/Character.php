<?php

namespace App\Models;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;
}
