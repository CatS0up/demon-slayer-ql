<?php

namespace Database\Seeders;

use App\Models\Affilation;
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $affilations = Affilation::select('name', 'uuid')->get();

        $characters = [
            // Ubuyashiki Family
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Kagaya Ubuyashiki',
                'age'                   => 23,
                'first_anime_apperance' => 'Episode 15',
                'first_manga_apperance' => 'Chapter 46',
                'short_description'     => 'Kagaya Ubuyashiki is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the 97th leader of the Demon Slayer Corps[2] known mainly as Oyakata-sama (お館様? lit. "Master") by his subordinates and peers and is also the head of the Ubuyashiki Family',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Amane Ubuyashiki',
                'age'                   => 27,
                'first_anime_apperance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'first_manga_apperance' => 'Chapter 66',
                'short_description'     => 'Kagaya Ubuyashiki is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the 97th leader of the Demon Slayer Corps[2] known mainly as Oyakata-sama (お館様? lit. "Master") by his subordinates and peers and is also the head of the Ubuyashiki Family.',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Amane Ubuyashiki',
                'age'                   => 27,
                'first_anime_apperance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'first_manga_apperance' => 'Chapter 66',
                'short_description'     => 'Amane Ubuyashiki is the wife and caretaker of Kagaya Ubuyashiki and the mother of Hinaki Ubuyashiki, Nichika Ubuyashiki, Kiriya Ubuyashiki, Kanata Ubuyashiki and Kuina Ubuyashiki.',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Hinaki Ubuyashiki',
                'age'                   => 9,
                'first_anime_apperance' => 'Episode 15',
                'first_manga_apperance' => 'Chapter 28',
                'short_description'     => 'Hinaki Ubuyashiki is the oldest daughter of Kagaya Ubuyashiki. Along with her twin sister Nichika Ubuyashiki, she stayed by his side and died with him.',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Nichika Ubuyashiki',
                'age'                   => 8,
                'first_anime_apperance' => 'Episode 15',
                'first_manga_apperance' => 'Chapter 28',
                'short_description'     => 'Nichika Ubuyashiki (産屋敷 日夏 Ubuyashiki Nichika?) is one of the older daughters of Kagaya Ubuyashiki. Along with her sister Hinaki Ubuyashiki, she stayed by his side and died with him.',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
            [
                'affilation_uuid'       => $affilations->firstWhere('name', 'Ubuyashiki Family')->uuid,
                'breathing_style_uuid'  => null,
                'name'                  => 'Nichika Ubuyashiki',
                'age'                   => 8,
                'first_anime_apperance' => 'Episode 15',
                'first_manga_apperance' => 'Chapter 28',
                'short_description'     => 'Nichika Ubuyashiki is one of the older daughters of Kagaya Ubuyashiki. Along with her sister Hinaki Ubuyashiki, she stayed by his side and died with him.',
                'anime_avatar'          => null,
                'manga_avatar'          => null,
            ],
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
    }
}
