<?php

namespace App\Models\Character;

use App\Models\BloodDemonArt;
use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingTechnique;
use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsToMany;
use Jenssegers\Mongodb\Relations\EmbedsMany;

class Character extends Model
{
    use HasFactory;

    public const FILTERS_NAMESPACE = 'App\Utilities\CharacterFilters';

    public $timestamps = false;

    public static function boot(): void
    {
        parent::boot();

        self::created(function (Character $model) {

            $slug = Str::slug($model->name);

            if (Storage::disk('public')->exists("avatars/$slug/anime.png"))
                $model->animeAvatar = Storage::url("avatars/$slug/anime.png");
            if (Storage::disk('public')->exists("avatars/$slug/manga.png"))
                $model->mangaAvatar = Storage::url("avatars/$slug/anime.png");

            $model->save();
        });
    }

    public function affiliations(): BelongsToMany
    {
        return $this->belongsToMany(Affiliation::class, null, 'affiliation_ids', 'member_ids',);
    }

    public function breathingStyles(): BelongsToMany
    {
        return $this->belongsToMany(BreathingStyle::class, null, 'breathing_style_ids', 'user_ids');
    }

    public function bloodDemonArts(): EmbedsMany
    {
        return $this->embedsMany(BloodDemonArt::class);
    }

    public function scopeFilterBy(Builder $query, array $filters): Builder
    {
        return (new FilterBuilder($query, $filters, self::FILTERS_NAMESPACE))->apply();
    }
}
