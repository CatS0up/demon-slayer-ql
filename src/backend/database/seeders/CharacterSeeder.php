<?php

namespace Database\Seeders;

use App\Models\Affiliation;
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
        $affiliations = Affiliation::select('name', '_id')->get();

        $characters = [
            // Ubuyashiki Family
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Kagaya Ubuyashiki',
                'age'                 => 23,
                'firstAnimeApperance' => 'Episode 15',
                'firstMangaApperance' => 'Chapter 46',
                'description'         => 'Kagaya Ubuyashiki is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the 97th leader of the Demon Slayer Corps[2] known mainly as Oyakata-sama (お館様? lit. "Master") by his subordinates and peers and is also the head of the Ubuyashiki Family',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Amane Ubuyashiki',
                'age'                 => 27,
                'firstAnimeApperance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaApperance' => 'Chapter 66',
                'description'         => 'Kagaya Ubuyashiki is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the 97th leader of the Demon Slayer Corps[2] known mainly as Oyakata-sama (お館様? lit. "Master") by his subordinates and peers and is also the head of the Ubuyashiki Family.',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Amane Ubuyashiki',
                'age'                 => 27,
                'firstAnimeApperance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaApperance' => 'Chapter 66',
                'description'         => 'Amane Ubuyashiki is the wife and caretaker of Kagaya Ubuyashiki and the mother of Hinaki Ubuyashiki, Nichika Ubuyashiki, Kiriya Ubuyashiki, Kanata Ubuyashiki and Kuina Ubuyashiki.',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Hinaki Ubuyashiki',
                'age'                 => 9,
                'firstAnimeApperance' => 'Episode 15',
                'firstMangaApperance' => 'Chapter 28',
                'description'         => 'Hinaki Ubuyashiki is the oldest daughter of Kagaya Ubuyashiki. Along with her twin sister Nichika Ubuyashiki, she stayed by his side and died with him.',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Nichika Ubuyashiki',
                'age'                 => 8,
                'firstAnimeApperance' => 'Episode 15',
                'firstMangaApperance' => 'Chapter 28',
                'description'         => 'Nichika Ubuyashiki (産屋敷 日夏 Ubuyashiki Nichika?) is one of the older daughters of Kagaya Ubuyashiki. Along with her sister Hinaki Ubuyashiki, she stayed by his side and died with him.',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
            [
                '_affiliationId'      => $affiliations->firstWhere('name', 'Ubuyashiki Family')->_id,
                '_breathingStyleId'   => null,
                'name'                => 'Nichika Ubuyashiki',
                'age'                 => 8,
                'firstAnimeApperance' => 'Episode 15',
                'firstMangaApperance' => 'Chapter 28',
                'description'         => 'Nichika Ubuyashiki is one of the older daughters of Kagaya Ubuyashiki. Along with her sister Hinaki Ubuyashiki, she stayed by his side and died with him.',
                'animeAvatar'         => null,
                'mangaAvatar'         => null,
            ],
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
    }
}
