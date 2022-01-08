<?php

namespace Database\Seeders;

use App\Models\Breathing\BreathingStyle;
use App\Models\Character\Affiliation;
use App\Models\Character\Character;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            // Ubuyashiki Family
            [
                'name'                 => 'Kagaya Ubuyashiki',
                'age'                  => 23,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Leader of Demon Slayer Corps (97th)',
                'description'          => 'Kagaya Ubuyashiki is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the 97th leader of the Demon Slayer Corps known mainly as "Oyakata-sama" by his subordinates and peers and is also the head of the Ubuyashiki Family.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 46',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Leadership Skills',
                    'Soothing Voice',
                    'Foresight'
                ]
            ],
            [
                'name'                 => 'Amane Ubuyashiki',
                'age'                  => 27,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Ubuyashiki Family Member',
                'description'          => 'Amane Ubuyashiki is the wife and caretaker of Kagaya Ubuyashiki and the mother of Hinaki Ubuyashiki, Nichika Ubuyashiki, Kiriya Ubuyashiki, Kanata Ubuyashiki and Kuina Ubuyashiki.',
                'firstAnimeAppearance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaAppearance' => 'Chapter 66',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Leadership Skills'
                ]
            ],
            [
                'name'                 => 'Hinaki Ubuyashiki',
                'age'                  => 9,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Ubuyashiki Family Member',
                'description'          => 'Hinaki Ubuyashiki is the oldest daughter of Kagaya Ubuyashiki. Along with her twin sister Nichika Ubuyashiki, she stayed by his side and died with him.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 28',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Ordinary human abilities'
                ]
            ],
            [
                'name'                 => 'Nichika Ubuyashiki',
                'age'                  => 8,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Ubuyashiki Family Member',
                'description'          => 'Nichika Ubuyashiki is one of the older daughters of Kagaya Ubuyashiki. Along with her sister Hinaki Ubuyashiki, she stayed by his side and died with him.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 28',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Ordinary human abilities'
                ]
            ],
            [
                'name'                 => 'Kiriya Ubuyashiki',
                'age'                  => 8,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Leader of Demon Slayer Corps (98th)',
                'description'          => 'Kiriya Ubuyashiki is the only son and middle child of Kagaya Ubuyashiki and the head of the Ubuyashiki Household. After his father\'s passing, he leads the Demon Slayer Corps as the 98th and final leader.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 6',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Extraordinary Memory',
                    'Foresight',
                    'Leadership Skills',
                    'Longevity'
                ]
            ],
            [
                'name'                 => 'Kanata Ubuyashiki',
                'age'                  => 5,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Ubuyashiki Family Member',
                'description'          => 'Kanata Ubuyashiki is the youngest daughter of Kagaya Ubuyashiki. She currently serves her older brother, the current head of the Ubuyashiki Household, Kiriya Ubuyashiki.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 6',
                'affiliations'         => ['Demon Slayer Corps', 'Ubuyashiki Family'],
                'abilities'            => [
                    'Extraordinary Memory'
                ]
            ],

            // Hashira
            [
                'name'                 => 'Giyu Tomioka',
                'age'                  => 21,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Water Hashira',
                'description'          => 'Giyu Tomioka is major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer of the Demon Slayer Corps and the current Water Hashira.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'breathingStyles'      => ['Water'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Indomitable Will'
                ]
            ],
            [
                'name'                 => 'Mitsuri Kanroji',
                'age'                  => 19,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Love Hashira',
                'description'          => 'Mitsuri Kanroji is a major supporting character of Demon Slayer: Kimetsu no Yaiba. She is a Demon Slayer of the Demon Slayer Corps and the current Love Hashira.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 44',
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Abnormal Muscular Constitution',
                    'Demon Slayer Mark',
                    'Enhanced Flexibility',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                ]
            ],
            [
                'name'                 => 'Obanai Iguro',
                'age'                  => 21,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Serpent Hashira',
                'description'          => 'Obanai Iguro is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer of the Demon Slayer Corps and the current Serpent Hashira.',
                'firstAnimeAppearance' => 'Episode 22',
                'firstMangaAppearance' => 'Chapter 45',
                'breathingStyles'      => ['Serpent'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Transparent World',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Enhanced Strength',
                ]
            ],
            [
                'name'                 => 'Sanemi Shinazugawa',
                'age'                  => 21,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Wind Hashira',
                'description'          => 'Sanemi Shinazugawa is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer of the Demon Slayer Corps and the current Wind Hashira.',
                'firstAnimeAppearance' => 'Episode 22',
                'firstMangaAppearance' => 'Chapter 45',
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Marechi',
                    'Muscle Control',
                    'Weapon Versatility'
                ]
            ],
            [
                'name'                 => 'Gyomei Himejima',
                'age'                  => 27,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Stone Hashira',
                'description'          => 'Gyomei Himejima is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer of the Demon Slayer Corps and the current Stone Hashira.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 44',
                'breathingStyles'      => ['Stone'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Transparent World',
                    'Enhanced Hearing',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Repetitive Action',
                    'Tactical Intellect',
                ]
            ],
            [
                'name'                 => 'Tengen Uzui',
                'age'                  => 23,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Sound Hashira',
                'description'          => 'Tengen Uzui is a major supporting character of Demon Slayer: Kimetsu no Yaiba and a major character in the Entertainment District Arc. He is a Demon Slayer of the Demon Slayer Corps, and the current Sound Hashira.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 44',
                'breathingStyles'      => ['Sound'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Hearing',
                    'Echolocation',
                    'Musical Score',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Shinobi Training',
                    'Enhanced Stealth',
                    'Poison Resistance',
                    'Tactical Intellect'
                ]
            ],
            [
                'name'                 => 'Muichiro Tokito',
                'age'                  => 14,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Mist Hashira',
                'description'          => 'Muichiro Tokito is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer of the Demon Slayer Corps and the current Mist Hashira.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 44',
                'breathingStyles'      => ['Mist'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Hearing',
                    'Transparent World',
                    'Extrasensory Perception',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Omnipresent Rage',
                ]
            ],
            [
                'name'                 => 'Shinobu Kocho',
                'age'                  => 18,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Insect Hashira',
                'description'          => 'Shinobu Kocho is a major supporting character of Demon Slayer: Kimetsu no Yaiba. She is a Demon Slayer of the Demon Slayer Corps and the current Insect Hashira.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 28',
                'breathingStyles'      => ['Insect'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Agility',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Enhanced Strength',
                    'Indomitable Will',
                    'Keen Intellect',
                    'Medical Expertise',
                    'Anti-Kibutsuji Drug',
                    'Poisonous Physiology'
                ]
            ],

            // Former hashira
            [
                'name'                 => 'Kanae Kocho',
                'age'                  => 17,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Flower Hashira',
                'description'          => 'Kanae Kocho was a Demon Slayer and the late Flower Hashira. She was slain several years prior to the present story. She is also the biological older sister of Shinobu Kocho and the adoptive older sister of Kanao Tsuyuri.',
                'firstAnimeAppearance' => 'Episode 24',
                'firstMangaAppearance' => 'Bonus Manga',
                'breathingStyles'      => ['Flower'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                ]
            ],
            [
                'name'                 => 'Sakonji Urokodaki',
                'age'                  => 52,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Former Water Hashira ',
                'description'          => 'Sakonji Urokodaki is a retired member of the Demon Slayer Corps, having held the position of the previous Water Hashira.',
                'firstAnimeAppearance' => 'Episode 2',
                'firstMangaAppearance' => 'Chapter 2',
                'breathingStyles'      => ['Water'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Speed',
                    'Enhanced Sense of Smell'
                ]
            ],
            [
                'name'                 => 'Jigoro Kuwajima',
                'age'                  => 50,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Former Thunder Hashira',
                'description'          => 'Jigoro Kuwajima is the man who trained Zenitsu Agatsuma and Kaigaku. He was formerly the Thunder Hashira.',
                'firstAnimeAppearance' => 'Episode 17',
                'firstMangaAppearance' => 'Chapter 33',
                'breathingStyles'      => ['Thunder'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
            ],
            [
                'name'                 => 'Kyojuro Rengoku',
                'age'                  => 20,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Flame Hashira',
                'description'          => 'Kyojuro Rengoku was a major supporting character of Demon Slayer: Kimetsu no Yaiba and a major character in the Mugen Train Arc. He was a Demon Slayer of the Demon Slayer Corps and the former Flame Hashira.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 44',
                'breathingStyles'      => ['Flame'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Durability',
                    'Extrasensory Perception',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Immense Strength',
                    'Indomitable Will',
                    'Keen Intellect'
                ]
            ],
            [
                'name'                 => 'Shinjuro Rengoku',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Former Flame Hashira',
                'description'          => 'Shinjuro Rengoku is the father of Kyojuro Rengoku and Senjuro Rengoku and the husband of Ruka Rengoku. He formerly served as the Flame Hashira of the Demon Slayer Corps.',
                'firstAnimeAppearance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaAppearance' => 'Chapter 67',
                'breathingStyles'      => ['Flame'],
                'affiliations'         => ['Demon Slayer Corps', 'Hashira'],
                'abilities'            => [
                    'Overall Abilities',
                ]
            ],

            // Ordinary demon slayers
            [
                'name'                 => 'Kanao Tsuyuri',
                'age'                  => 16,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Kanao Tsuyuri is a major supporting character of Demon Slayer: Kimetsu no Yaiba. She is a Demon Slayer of the Demon Slayer Corps, Shinobu Kocho\'s Tsuguko and the adopted sister of Shinobu and Kanae Kocho.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 6',
                'breathingStyles'      => ['Flower'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Strength',
                    'Enhanced Vision',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Indomitable Will'
                ]
            ],
            [
                'name'                 => 'Tanjiro Kamado',
                'age'                  => 17,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Tanjiro Kamado is the main protagonist of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer in the Demon Slayer Corps, who joined to find a remedy to turn his sister, Nezuko Kamado, back into a human and to hunt down and kill demons, and later swore to defeat Muzan Kibutsuji, the Demon King, in order to prevent others from suffering the same fate as him.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'breathingStyles'      => ['Sun', 'Water'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                    'Total Concentration: Constant',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Transparent World',
                    'Enhanced Accuracy',
                    'Enhanced Smell',
                    'Extrasensory Perception',
                    'Pseudo-Precognition',
                    'Enhanced Strength',
                    'Genius Intellect',
                    'Combat Intuition',
                    'Hard Skull',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Indomitable Will',
                    'Repetitive Action',
                    'Selfless State'
                ]
            ],
            [
                'name'                 => 'Zenitsu Agatsuma',
                'age'                  => 16,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Zenitsu Agatsuma is one of the main protagonists of Demon Slayer: Kimetsu no Yaiba and along with Inosuke Hashibira, a travelling companion of Tanjiro Kamado and Nezuko Kamado.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 6',
                'breathingStyles'      => ['Thunder'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Hearing',
                    'Extrasensory Perception',
                    'Enhanced Strength',
                    'Hard Skull',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Indomitable Will',
                    'Tactical Intellect',
                    'Unconscious Combat'
                ]
            ],
            [
                'name'                 => 'Inosuke Hashibira',
                'age'                  => 16,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Inosuke Hashibira is one of the main protagonists of Demon Slayer: Kimetsu no Yaiba and along with Zenitsu Agatsuma, a traveling companion of Tanjiro Kamado and Nezuko Kamado.',
                'firstAnimeAppearance' => 'Episode 11',
                'firstMangaAppearance' => 'Chapter 21',
                'breathingStyles'      => ['Beast'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                    'Animal Imitation',
                    'Enhanced Flexibility',
                    'Enhanced Strength',
                    'Enhanced Touch',
                    'Extrasensory Perception',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Stamina',
                    'Immense Endurance',
                    'Indomitable Will',
                    'Poison Resistance',
                    'Repetitive Action'
                ],
                [
                    'name'                 => 'Genya Shinazugawa',
                    'age'                  => 16,
                    'gender'               => 'Male',
                    'race'                 => 'Human',
                    'occupation'           => 'Demon Slayer',
                    'description'          => 'Genya Shinazugawa is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is a Demon Slayer in the Demon Slayer Corps and also the younger brother of the Wind Hashira, Sanemi Shinazugawa.',
                    'firstAnimeAppearance' => 'Episode 4',
                    'firstMangaAppearance' => 'Chapter 6',
                    'bloodDemonArts'       => [
                        [
                            'name'        => 'Wooden Flesh Bullets',
                            'description' => 'Due to eating the cells of Upper Rank One and Upper Rank Four, Genya had developed a unique technique where he merges his demon-transformed cells with his sun steel bullets and gun, that, when fired, the direction and velocity of the bullets could be freely manipulated by Genya.'
                        ],
                        [
                            'name'        => 'Blood Roots',
                            'description' => 'Genya could further alter his embedded Flesh Bullets by having them take root inside his target and suck the demons blood from inside their bodies, effectively preventing them from activating their own Blood Demon Arts.'
                        ],
                    ],
                    'affiliations' => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                    'abilities'    => [
                        'Demonic Transformation',
                        'Upper Rank Four Empowerment',
                        'Upper Rank One Empowerment',
                        'Flesh Gun',
                        'Repetitive Action',
                    ]
                ],
                [
                    'name'                 => 'Murata',
                    'age'                  => 17,
                    'gender'               => 'Male',
                    'race'                 => 'Human',
                    'occupation'           => 'Demon Slayer',
                    'description'          => 'Murata is a supporting character of Demon Slayer: Kimetsu no Yaiba and a member of the Demon Slayer Corps.',
                    'firstAnimeAppearance' => 'Episode 15',
                    'firstMangaAppearance' => 'Chapter 28',
                    'breathingStyles'      => ['Water'],
                    'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                    'abilities'            => [
                        'Overall Abilities',
                    ]
                ],
                [
                    'name'                 => 'Ozaki',
                    'age'                  => null,
                    'gender'               => 'Male',
                    'race'                 => 'Human',
                    'occupation'           => 'Demon Slayer',
                    'description'          => 'Ozaki was a Demon Slayer and part of the Demon Slayer Corps.',
                    'firstAnimeAppearance' => 'Episode 16',
                    'firstMangaAppearance' => 'Chapter 30',
                    'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                ]
            ],
            [
                'name'                 => 'Masachika Kumeno',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Masachika Kumeno was a Demon Slayer closely acquainted with the current Wind Hashira Sanemi Shinazugawa.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 168',
                'breathingStyles'      => ['Wind'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                ]
            ],
            [
                'name'                 => 'Yoriichi Tsugikuni',
                'age'                  => 80,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Yoriichi Tsugikuni is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He was a legendary Demon Slayer of the Demon Slayer Corps during the Sengoku Era.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 99',
                'breathingStyles'      => ['Sun'],
                'affiliations'         => ['Demon Slayer Corps', 'Ordinary Demon Slayers'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Bright Red Nichirin Sword',
                    'Transparent World',
                    'Extrasensory Perception',
                    'Genius Intellect',
                    'Immeasurable Speed',
                    'Immeasurable Reflexes',
                    'Immeasurable Stamina',
                    'Immeasurable Endurance',
                    'Immeasurable Strength',
                    'Selfless State'
                ]
            ],

            [
                'name'                 => 'Tecchin Tecchikawahara',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Swordsmith',
                'description'          => 'Tecchin Tecchikawahara is the chief of the Swordsmith Village.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 101',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
                'abilities'            => [
                    'Master Swordsmith',
                ]
            ],
            [
                'name'                 => 'Hotaru Haganezuka',
                'age'                  => 37,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Swordsmith',
                'description'          => 'Hotaru Haganezuka is a supporting character of Demon Slayer: Kimetsu no Yaiba. He is a swordsmith affiliated with the Demon Slayer Corps.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 9',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
                'abilities'            => [
                    'Overall Abilities',
                    'Enhanced Stamina',
                    'Enhanced Strength',
                    'Master Swordsmith',
                ]
            ],
            [
                'name'                 => 'Kozo Kanamori',
                'age'                  => 26,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Swordsmith',
                'description'          => 'Kozo Kanamori is a swordsmith affiliated with the Demon Slayer Corps.',
                'firstAnimeAppearance' => 'Episode 25',
                'firstMangaAppearance' => 'Chapter 51',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
            ],
            [
                'name'                 => 'Kotetsu',
                'age'                  => 10,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Kotetsu is a young villager from the Swordsmith Village. His ancestors built the battle doll Yoriichi Type Zero.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 101',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
            ],
            [
                'name'                 => 'Tetsuido',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Swordsmith',
                'description'          => 'Tetsuido was a swordsmith affiliated with the Demon Slayer Corps. He was responsible for Muichiro Tokito\'s swords until he died from a heart attack.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 119',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
            ],
            [
                'name'                 => 'Teruko',
                'age'                  => 6,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Teruko is a young girl, accompanied by her brother Shoichi, who approaches Tanjiro Kamado and Zenitsu Agatsuma to help save her older brother from the Tsuzumi Mansion.',
                'firstAnimeAppearance' => 'Episode 11',
                'firstMangaAppearance' => 'Chapter 20',
                'affiliations'         => ['Demon Slayer Corps', 'Swordsmith Village'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],

            // Other/Associations
            [
                'name'                 => 'Nezuko Kamado',
                'age'                  => 14,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Nezuko Kamado  is the deuteragonist of Demon Slayer: Kimetsu no Yaiba. She is a demon and the younger sister of Tanjiro Kamado and one of the two remaining members of the Kamado family. Formerly a human, she was attacked and turned into a demon by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Pyrokinesis',
                        'description' => 'Nezuko\'s Blood Demon Art allows her to generate and manipulate special demonic flames created from her blood that are pinkish in color.'
                    ],
                ],
                'affiliations' => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'    => [
                    'Overall Abilities',
                    'Abnormal Demon Physiology',
                    'Awakened Form',
                    'Sunlight Resistance',
                    'Immense Regeneration',
                    'Immense Strength',
                    'Size Alteration'
                ],
            ],
            [
                'name'                 => 'Tamayo',
                'age'                  => 500,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Doctor',
                'description'          => 'Tamayo is a major supporting character of Demon Slayer: Kimetsu no Yaiba. She is a demon, a skilled doctor, and close ally of Tanjiro Kamado.',
                'firstAnimeAppearance' => 'Episode 8',
                'firstMangaAppearance' => 'Chapter 14',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Supernatural Blood',
                        'description' => 'Tamayo\'s main ability is to draw her blood and cast various spells that enact various effects on her targets.'
                    ],
                ],
                'affiliations' => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'    => [
                    'Medical Skills',
                    'Anti-Blood Demon Coagulant',
                    'Anti-Kibutsuji Drug',
                ]
            ],
            [
                'name'                 => 'Yushiro',
                'age'                  => 35,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Painter',
                'description'          => 'Yushiro is a major supporting character of Demon Slayer: Kimetsu no Yaiba. He is the traveling companion of Tamayo and a close ally of Tanjiro Kamado. Yushiro was turned into a demon by Tamayo when he had a terminal illness.',
                'firstAnimeAppearance' => 'Episode 8',
                'firstMangaAppearance' => 'Chapter 14',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Blindfold',
                        'description' => 'Yushiro\'s Blood Demon Art allows him to create paper talismans which possess the ability to mask or reveal something\'s presence. By placing these on certain objects of his choosing, he can get rid of their presence. Otherwise, by placing it on someone\'s forehead, he can enhance their vision by revealing the presence of masked objects.'
                    ],
                    [
                        'name'        => 'Mind Control',
                        'description' => 'During the Infinity Castle Arc, Yushiro displays a new ability of his Blood Demon Art, which allows him to put an individual with his Blindfold under hypnosis and take control of their minds and vision.'
                    ],
                ],
                'affiliations' => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'    => [
                    'Overall Abilities',
                    'Body Modification',
                    'Curse Immunity',
                    'Medical Skills',
                    'Talented Painter'
                ]
            ],
            [
                'name'                 => 'Chachamaru',
                'age'                  => null,
                'gender'               => 'null',
                'race'                 => 'Demon',
                'occupation'           => 'Familliar',
                'description'          => 'Chachamaru is a feline familiar that assists in Tamayo\'s medical research with Demon blood.',
                'firstAnimeAppearance' => 'Episode 13',
                'firstMangaAppearance' => 'Chapter 25',
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'            => [
                    'Disappear',
                    'Body Modification',
                ]
            ],
            [
                'name'                 => 'Sabito',
                'age'                  => 21,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Apprentice of Sakonji Urokodaki',
                'description'          => 'Sabito was a former apprentice of Sakonji Urokodaki. He appeared to assist Tanjiro Kamado in his preparations for the Final Selection exam.',
                'firstAnimeAppearance' => 'Episode 3',
                'firstMangaAppearance' => 'Chapter 4',
                'breathingStyles'      => ['Water'],
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'            => [
                    'Overall Abilities'
                ]
            ],
            [
                'name'                 => 'Makomo',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Apprentice of Sakonji Urokodaki',
                'description'          => 'Sabito was a former apprentice of Sakonji Urokodaki.',
                'firstAnimeAppearance' => 'Episode 3',
                'firstMangaAppearance' => 'Chapter 5',
                'breathingStyles'      => ['Water'],
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
            ],
            [
                'name'                 => 'Suma',
                'age'                  => 19,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Suma is a supporting charater of Demon Slayer: Kimetsu no Yaiba. She is a kunoichi and one of Tengen Uzui\'s wives.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 79',
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'            => [
                    'Overall Abilities'
                ]
            ],
            [
                'name'                 => 'Makio',
                'age'                  => 20,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Makio is a supporting charater of Demon Slayer: Kimetsu no Yaiba. She is a kunoichi and one of Tengen Uzui\'s wives.',
                'firstAnimeAppearance' => 'Episode 35',
                'firstMangaAppearance' => 'Chapter 72',
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'            => [
                    'Overall Abilities'
                ]
            ],
            [
                'name'                 => 'Hinatsuru',
                'age'                  => 21,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Demon Slayer',
                'description'          => 'Makio is a supporting charater of Demon Slayer: Kimetsu no Yaiba. She is a kunoichi and one of Tengen Uzui\'s wives.',
                'firstAnimeAppearance' => 'Episode 35',
                'firstMangaAppearance' => 'Chapter 77',
                'affiliations'         => ['Demon Slayer Corps', 'Other/Associations'],
                'abilities'            => [
                    'Overall Abilities'
                ]
            ],

            // Butterfly Mansion
            [
                'name'                 => 'Aoi Kanzaki',
                'age'                  => 16,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Butterfly Mansion Worker',
                'description'          => 'Aoi Kanzaki is a supporting character of Demon Slayer: Kimetsu no Yaiba and a Demon Slayer of the Demon Slayer Corps. However, she works as a helper at the Butterfly Mansion rather than taking to the front lines and fighting demons.',
                'firstAnimeAppearance' => 'Episode 23',
                'firstMangaAppearance' => 'Chapter 48',
                'affiliations'         => ['Demon Slayer Corps', 'Butterfly Mansion'],
                'abilities'            => [
                    'Overall Abilities',
                    'Medical Knowledge',
                    'Trained Craftsmanship',
                ]
            ],
            [
                'name'                 => 'Sumi Nakahara',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Butterfly Mansion Servant',
                'description'          => 'Sumi Nakahara is a servant of the Butterfly Mansion.',
                'firstAnimeAppearance' => 'Episode 24',
                'firstMangaAppearance' => 'Chapter 49',
                'affiliations'         => ['Demon Slayer Corps', 'Butterfly Mansion'],
                'abilities'            => [
                    'Total Concentration: Constant ',
                ]
            ],
            [
                'name'                 => 'Kiyo Terauchi',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Butterfly Mansion Servant',
                'description'          => 'Kiyo Terauchi is a servant of the Butterfly Mansion.',
                'firstAnimeAppearance' => 'Episode 23',
                'firstMangaAppearance' => 'Chapter 48',
                'affiliations'         => ['Demon Slayer Corps', 'Butterfly Mansion'],
            ],
            [
                'name'                 => 'Naho Takada',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Butterfly Mansion Servant',
                'description'          => 'Naho Takada is a servant of the Butterfly Mansion.',
                'firstAnimeAppearance' => 'Episode 24',
                'firstMangaAppearance' => 'Chapter 49',
                'affiliations'         => ['Demon Slayer Corps', 'Butterfly Mansion'],
            ],
            [
                'name'                 => 'Goto',
                'age'                  => 23,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Cleanup Brigade',
                'description'          => 'Goto is a member of the Kakushi, the clean-up brigade of the Demon Slayers. He is mentioned as the one who found near-dead Tanjiro Kamado, Inosuke Hashibira, and Zenitsu Agatsuma in the aftermath of the Entertainment District Arc.',
                'firstAnimeAppearance' => 'Episode 21',
                'firstMangaAppearance' => 'Chapter 45',
                'affiliations'         => ['Demon Slayer Corps', 'Butterfly Mansion'],
            ],

            // Demons
            [
                'name'                 => 'Susamaru',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Susamaru along with Yahaba, are the main antagonists of the Asakusa Arc. She was a demon that aspired to join Muzan Kibutsuji\'s Twelve Kizuki.',
                'firstAnimeAppearance' => 'Episode 8',
                'firstMangaAppearance' => 'Chapter 14',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Hiasobi Temari',
                        'description' => 'Susamaru\'s Blood Demon Art allows her to conjure Temari handballs at will. She can either throw or kick them at such intense speed and power that she can completely annihilate any limbs with a single touch.'
                    ],
                ],
                'affiliations' => ['Demons', 'Ordinary Demons'],
                'abilities'    => [
                    'Overall Abilities',
                    'Flesh Manipulation',
                ]
            ],
            [
                'name'                 => 'Yahaba',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Yahaba along with Susamaru, are the main antagonists of the Asakusa Arc. He was a demon who aspired to join Muzan Kibutsuji\'s Twelve Kizuki.',
                'firstAnimeAppearance' => 'Episode 8',
                'firstMangaAppearance' => 'Chapter 14',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Koketsu Arrow',
                        'description' => 'Yahaba\'s Blood Demon Art allows him to conjure and manipulate invisible red arrows by blinking the eyes on each of his palms.'
                    ],
                ],
                'affiliations' => ['Demons', 'Ordinary Demons'],
                'abilities'    => [
                    'Overall Abilities',
                    'Enhanced Tracking',
                    'Flesh Manipulation'
                ]
            ],
            [
                'name'                 => 'Temple Demon',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Temple Demon was the first Demon Tanjiro Kamado encountered that has taken a human\'s life.',
                'firstAnimeAppearance' => 'Episode 2',
                'firstMangaAppearance' => 'Chapter 2',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Flesh Manipulation',
                        'description' => 'This demon has displayed the ability to manipulate the length, speed and sharpness of his tongue, being able to slice a vase with ease.'
                    ],
                ],
                'affiliations' => ['Demons', 'Ordinary Demons'],
            ],
            [
                'name'                 => 'Hand Demon',
                'age'                  => 47,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Hand Demon was a notorious Demon who killed thirteen of Sakonji Urokodaki\'s apprentices, including Sabito and Makomo, as well as at least fifty other would-be Demon Slayers.',
                'firstAnimeAppearance' => 'Episode 4',
                'firstMangaAppearance' => 'Chapter 6',
                'affiliations'         => ['Demons', 'Ordinary Demons'],
            ],
            [
                'name'                 => 'Tongue Demon',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Tongue Demon was a demon that lived in the Tsuzumi Mansion.',
                'firstAnimeAppearance' => 'Episode 12',
                'firstMangaAppearance' => 'Chapter 22',
                'affiliations'         => ['Demons', 'Ordinary Demons'],
                'abilities'            => [
                    'Flesh Manipulation',
                ]
            ],
            [
                'name'                 => 'Horned Demon',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Horned Demon was a demon that lived in the Tsuzumi Mansion.',
                'firstAnimeAppearance' => 'Episode 12',
                'firstMangaAppearance' => 'Chapter 23',
                'affiliations'         => ['Demons', 'Ordinary Demons'],
                'abilities'            => [
                    'Enhanced Strength',
                ]
            ],
            [
                'name'                 => 'Swamp Demon',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Swamp Demon was a Demon that went on a rash of kidnappings during Tanjiro Kamado\'s first mission for the Demon Slayer Corps.',
                'firstAnimeAppearance' => 'Episode 6',
                'firstMangaAppearance' => 'Chapter 10',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Swamp Domain',
                        'description' => 'The Swamp Demon is able to conjure a pocket swamp dimension in which he can navigate freely. The "swamp" often manifests as a puddle that travels on the ground which can be used to infiltrate households and perform kidnappings with nobody realizing.'
                    ],
                    [
                        'name'        => 'Self-Replication',
                        'description' => 'The Swamp Demon can split himself into three selves, distinguished by their clothing and the number of horns on their heads (from 1 up to 3).'
                    ],
                ],
            ],
            [
                'name'                 => 'Spider Demon (Father)',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Spider Demon (Father) was a member of the Spider Family.',
                'firstAnimeAppearance' => 'Episode 16',
                'firstMangaAppearance' => 'Chapter 34',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Metamorphosis',
                        'description' => 'The Father Spider Demon possessed the ability to shed his outer skin in order to transform into a more powerful form with increased physical power and regenerative abilities, making him even stronger and durable than in his original form.'
                    ],
                ],
                'affiliations' => ['Demons', 'Spider Family', 'Ordinary Demons'],
                'abilities'    => [
                    'Spider Physiology',
                    'Enhanced Strength',
                    'Enhanced Durability'
                ],
            ],
            [
                'name'                 => 'Spider Demon (Mother)',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Spider Demon (Mother) was a member of the Spider Family.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 28',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'String Manipulation',
                        'description' => 'Like the other members of her "Family", the Mother Spider Demon\'s main form of attack is focused on spider threads/strings created from her flesh and cells.'
                    ],
                    [
                        'name'        => 'Puppetry',
                        'description' => 'The Mother Spider Demon uses her strings in a unique manner by utilizing it to manipulate corpses like puppets. She does this by attaching her strings to her intended victims she can successfully turn them into virtual puppets that she then uses to combat her opponents from a safe distance.'
                    ],
                    [
                        'name'        => 'Spider Manipulation',
                        'description' => 'The Mother Spider Demon can create and command small white spiders with red dot like design similar to the physical traits of herself and her "family" to stealthily attach her threads to her intended victims without them noticing.'
                    ],
                ],
                'affiliations' => ['Demons', 'Spider Family', 'Ordinary Demons'],
                'abilities'    => [
                    'Spider Physiology',
                ],
            ],
            [
                'name'                 => 'Spider Demon (Son)',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Spider Demon (Son) was a member of the Spider Family.',
                'firstAnimeAppearance' => 'Episode 16',
                'firstMangaAppearance' => 'Chapter 32',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Poison Manipulation',
                        'description' => 'The Son Spider Demon\'s spider-like ability is his power to generate and manipulate deadly poison.'
                    ],
                    [
                        'name'        => 'Spider Conversion',
                        'description' => 'The Son Spider Demon reveals that one of his venom\'s possesses the ability to convert a human being into a spider like creature, with the only human trait remaining in them being their human heads, turning them into the same spider-human hybrid like himself, completely losing all intelligence and becoming subservient to him.'
                    ],
                ],
                'affiliations' => ['Demons', 'Spider Family', 'Ordinary Demons'],
                'abilities'    => [
                    'Spider Physiology',
                ],
            ],
            [
                'name'                 => 'Spider Demon (Daughter)',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Spider Demon (Daughter) was a member of the Spider Family.',
                'firstAnimeAppearance' => 'Episode 16',
                'firstMangaAppearance' => 'Chapter 34',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Silk Manipulation',
                        'description' => 'Like her "mother" and Rui, the Daughter Spider Demon can manipulate threads made from her own cells, this time in a fashion similar to silk that forms a cocoon instead of threads that resemble wires.'
                    ],
                    [
                        'name'        => 'Acid Manipulation',
                        'description' => 'The Daughter Spider Demon can manipulate and generate acid made from her own blood and flesh. The acid she creates can easily dissolve a person though the process is a little slow.'
                    ],
                ],
                'affiliations' => ['Demons', 'Spider Family', 'Ordinary Demons'],
                'abilities'    => [
                    'Spider Physiology',
                    'Shapeshifting'
                ],
            ],
            [
                'name'                 => 'Serpent Demon',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Spider Demon (Daughter) was a demon that was worshipped by Obanai Iguro\'s family.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 188',
                'affiliations'         => ['Demons', 'Ordinary Demons'],
            ],
            [
                'name'                 => 'Flute Demon',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Ordinary Demon',
                'description'          => 'Flute Demon was a Demon exclusive to the manga chapter Special One-Shot. He was responsible for the deaths of a small group of Demon Slayers and innocent civilians.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Special One-Shot',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Flute Manipulation',
                        'description' => 'The Flute Demon\'s main ability is to conjure a special flute that when played, enacts various effects.'
                    ],
                    [
                        'name'        => 'Nervous System Disruption',
                        'description' => 'When his flute is played, it disrupts the nervous system of his opponents (if they try move one of their feet, their head will move instead, if they attempt to move one of their hands, their feet will move, etc.), thus making it nearly impossible to accurately move.'
                    ],
                    [
                        'name'        => 'Wolf Manipulation',
                        'description' => 'This demon can also use his flute to summon 2 black wolves and command them to kill his opponents. It is unsure whether he can summon more than 2 demonic wolves.'
                    ],
                ],
                'affiliations' => ['Demons', 'Ordinary Demons'],
            ],


            // Twelve Kizuki
            [
                'name'                 => 'Muzan Kibutsuji',
                'age'                  => 10000,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Leader Of Twelve Kizuki',
                'description'          => 'Muzan Kibutsuji is the main antagonist of Demon Slayer: Kimetsu no Yaiba. He is the Demon King, the first of his kind, as well as the progenitor of all other demons in existence.',
                'firstAnimeAppearance' => 'Episode 7',
                'firstMangaAppearance' => 'Chapter 13',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Biokinesis',
                        'description' => 'Muzan\'s Blood Demon Art grants him powerful biokinetic abilities. Muzan has displayed the ability to alter and control his flesh, limbs, and even his organs. Using his Blood Demon Art, Muzan can change his facial features, replicate and move the organs in his body, create weapons using his flesh and bones, contort his entire torso into a giant mouth, or even create flesh puppets that he can control.'
                    ],
                    [
                        'name'        => 'Shapeshifting',
                        'description' => 'Muzan possesses the most powerful and advanced shapeshifting ability out of all demons in existence. Not only can Muzan change his appearance flawlessly, he can also change his aura and presence which can even fool the enhanced senses of Lower Rank demons.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Biological Absorption',
                    'Combat Form',
                    'Arm Whips',
                    'Mouth Suction',
                    'Leg Whips',
                    'Spine Whips',
                    'Demonic Blood',
                    'Blood Memory Transfer',
                    'Demon Curse',
                    'Demon Memory Access',
                    'Demon Power Nullification',
                    'Possession',
                    'Telepathy',
                    'Extrasensory Perception',
                    'Genius Intellect',
                    'Immeasurable Speed',
                    'Immeasurable Reflexes',
                    'Immeasurable Strength',
                    'Nigh-Absolute Regeneration',
                    'Unlimited Stamina',
                    'Unlimited Endurance',
                ]
            ],
            [
                'name'                 => 'Kokushibo',
                'age'                  => 480,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank One',
                'description'          => 'Kokushibo Kokushibo is a major supporting antagonist of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the highest position, Upper Rank One.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 99',
                'breathingStyles'      => ['Moon'],
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Crescent Moon Blades',
                        'description' => 'Complementing his combat style: Moon Breathing, his Blood Demon Art allows him to create and manipulate dozens of sharp blades shaped like traditional crescent moons from his flesh katana.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Biological Absorption',
                    'Demon Slayer Mark',
                    'Transparent World',
                    'Extrasensory Perception',
                    'Flesh Manipulation',
                    'Sword Manipulation',
                    'Immense Durability',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Strength',
                    'Indomitable Will',
                    'Menacing Aura',
                    'Monstrous Transformation',
                    'Tactical Intellect',
                    'Unlimited Stamina',
                    'Unlimited Endurance'
                ]
            ],
            [
                'name'                 => 'Doma',
                'age'                  => 133,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank Two',
                'description'          => 'Doma is a major supporting antagonist of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Two.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 98',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Cryokinesis',
                        'description' => 'Doma\'s Blood Demon Art grants him extremely powerful cryokinesis. He can generate ice and frost from his flesh and blood and can spawn it anywhere in his vicinity, as well as manipulating it at will, allowing him to unleash incredibly potent ice techniques.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Apathy',
                    'Biological Absorption',
                    'Extrasensory Perception',
                    'Immense Durability',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Strength',
                    'Immense Regeneration',
                    'Reactive Adaptation',
                    'Keen Intellect',
                    'Unlimited Stamina',
                    'Unlimited Endurance'
                ]
            ],
            [
                'name'                 => 'Akaza',
                'age'                  => 133,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank Three',
                'description'          => 'Akaza is a major supporting antagonist of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Three.',
                'firstAnimeAppearance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaAppearance' => 'Chapter 63',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Destructive Death',
                        'description' => 'Akaza\'s Blood Demon Art takes the form of a martial arts style that combines shockwave-like attacks and his Soryu Style he mastered when he was human.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Extrasensory Perception',
                    'Flesh Manipulation',
                    'Immense Durability',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Strength',
                    'Indomitable Will',
                    'Tactical Intellect',
                    'Unlimited Stamina ',
                ]
            ],
            [
                'name'                 => 'Nakime',
                'age'                  => 113,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank Four',
                'description'          => 'Nakime  is a supporting antagonist in the Infinity Castle Arc of Demon Slayer: Kimetsu no Yaiba. Initally, she was a demon who served to summon other demons into the Infinity Castle on Muzan Kibutsuji\'s command, but after Hantengu\'s death, she got promoted to the position of Upper Rank Four in the Twelve Kizuki.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Infinity Castle',
                        'description' => 'Nakime\'s Blood Demon Art takes the form of an extra-dimensional space that houses a fortress of infinite scale. As the owner of this infinite fortress, Nakime also possesses dominion over the space, being able to manipulate and alter it at will by simply strumming her biwa.'
                    ],
                    [
                        'name'        => 'Portal Creation',
                        'description' => 'Nakime can also spawn portals at any location to transport people outside her fortress or to anywhere within it in the form of tatami sliding doors.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Eye Detachment',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Talented Biwa Player',
                ]
            ],
            [
                'name'                 => 'Hantengu',
                'age'                  => 200,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Former Upper Rank Four',
                'description'          => 'Hantengu along with Gyokko, are the primary antagonists of the Swordsmith Village Arc of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Four.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 98',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Emotion Manifestation',
                        'description' => 'Hantengu\'s Blood Demon Art allows him to manifest his emotions as powerful younger clones of himself with their own unique appearances, personalities and abilities.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                ]
            ],
            [
                'name'                 => 'Gyokko',
                'age'                  => 113,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank Five',
                'description'          => 'Gyokko along with Hantengu, are the primary antagonists in the Swordsmith Village Arc of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Five.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 98',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Porcelain Vases',
                        'description' => 'Gyokko\'s Blood Demon Art revolves around his porcelain vases. He can presumably spawn them anywhere within his vicinity and create multiple pots of varying sizes at once. Gyokko first displayed the ability to freely teleport from one pot to another instantaneously, offsetting his lack of legs and allowing him to travel far distances with minimal effort as well as to evade attacks easily.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Flesh Manipulation',
                    'Immense Durability',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Molting Transformation',
                    'Talented Artist',
                    'Unlimited Stamina',
                    'Unlimited Endurance'
                ]
            ],
            [
                'name'                 => 'Kaigaku',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Upper Rank Six',
                'description'          => 'Kaigaku is a supporting antagonist in the Infinity Castle Arc of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Six (上弦の陸 Jōgen no Roku?), replacing Daki and Gyutaro after their deaths.',
                'firstAnimeAppearance' => 'Episode 17',
                'firstMangaAppearance' => 'Chapter 34',
                'breathingStyles'      => ['Thunder'],
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Electrokinesis',
                        'description' => 'Complementing his Breathing Style: Thunder Breathing, Kaigaku\'s Blood Demon Art grants him special electrokinetic abilities which allow him to generate and manipulate black colored lightning and electricity from his flesh and blood.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Immense Speed',
                    'Immense Reflexes',
                ]
            ],
            [
                'name'                 => 'Gyutaro',
                'age'                  => 126,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Former Upper Rank Six',
                'description'          => 'Gyutaro is one of the primary antagonists in the Entertainment District Arc of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Upper Rank Six , a position he shares with his younger sister, Daki.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 85',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Blood Manipulation',
                        'description' => 'Gyutaro\'s Blood Demon Art allows him to manipulate his own body\'s blood in various ways. He is shown to generate them from his flesh Kama or from open wounds on his body.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Core Detachment',
                    'Decapitation Immunity',
                    'Extrasensory Perception',
                    'Flesh Manipulation',
                    'Immense Durability',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Poison Generation',
                    'Tactical Intellect',
                    'Unlimited Stamina',
                    'Unlimited Endurance'
                ]
            ],
            [
                'name'                 => 'Daki',
                'age'                  => 113,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Former Upper Rank Six',
                'description'          => 'Daki is one of the primary antagonists in the Entertainment District Arc of Demon Slayer: Kimetsu no Yaiba. She is a demon affiliated with the Twelve Kizuki, being the secondary holder of the position of Upper Rank Six, a position she shares with the primary holder, her older brother, Gyutaro.',
                'firstAnimeAppearance' => 'Episode 36',
                'firstMangaAppearance' => 'Chapter 73',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Obi Sash Manipulation',
                        'description' => 'Daki\'s Blood Demon Art allows her to create flower-patterned Obi sashes from her flesh, as well as manipulate them at will.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Decapitation Immunity',
                    'Extrasensory Perception',
                    'Hair Manipulation',
                    'Immense Regeneration',
                    'Immense Speed',
                    'Immense Reflexes',
                    'Immense Strength',
                    'Keen Intellect',
                    'Restricted Flight',
                    'Skilled Courtesan',
                    'Unlimited Stamina',
                    'Unlimited Endurance',
                ]
            ],

            [
                'name'                 => 'Enmu',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank One',
                'description'          => 'Enmu was the primary antagonist in the Mugen Train Arc of Demon Slayer: Kimetsu no Yaiba. He was a demon affiliated with the Twelve Kizuki, holding the position of Lower Rank One.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Sleep Inducement',
                        'description' => 'Enmu\'s Blood Demon Art grants him the ability to force anyone into deep sleep.'
                    ],
                    [
                        'name'        => 'Dream Manipulation',
                        'description' => 'Enmu\'s Blood Demon Art\'s secondary ability is his power to enter, manipulate and control someone\'s dreams when they are asleep.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Enhanced Speed',
                    'Enhanced Reflexes',
                    'Flesh Manipulation',
                    'Flesh Detachments',
                    'Fusion',
                ]
            ],
            [
                'name'                 => 'Ubume',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Former Lower Rank One',
                'description'          => 'Ubume is the primary antagonist in the Third Light Novel of Demon Slayer: Kimetsu no Yaiba. She was a demon affiliated with the Twelve Kizuki, having formerly held the position of Lower Rank One.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => null,
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Illusion Manifestation',
                        'description' => 'Ubume and cast powerful illusions at will. She initially uses it to change a room in a mansion into fleshy walls of her stomach.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                ]
            ],
            [
                'name'                 => 'Rokuro',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank Two',
                'description'          => 'Rokuro was a member of the Twelve Kizuki, having held the position of Lower Rank Two.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'affiliations'         => ['Demons', 'Twelve Kizuki'],
            ],
            [
                'name'                 => 'Hairo',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Former Lower Rank Two',
                'description'          => 'Rokuro was a member of the Twelve Kizuki, having held the position of Lower Rank Two.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Kyojuro Rengoku: Gaiden (Part 1)',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Umbrakinesis',
                        'description' => 'Hairo\'s Blood Demon Art allows him to create and manipulate shadows with special properties and characteristics from his flesh and blood.'
                    ],
                    [
                        'name'        => 'Artillery Manipulation',
                        'description' => 'Hairo\'s shadows contain a countless number of weapons, ranging from pistols to bolt-rifles to shotguns and sub-machine guns, even containing a rotatory mini-gun, molotovs, dynamite and other explosives, and also a large katana.'
                    ],
                ],
                'affiliations' => ['Demons', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Enhanced Regeneration',
                    'Enhanced Speed',
                    'Enhanced Reflexes',
                    'Skilled Torturer',
                ]
            ],
            [
                'name'                 => 'Wakuraba',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank Three',
                'description'          => 'Rokuro was a member of the Twelve Kizuki, having held the position of Lower Rank Three.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'affiliations'         => ['Demons', 'Twelve Kizuki'],
                'abilities'            => [
                    'Regeneration',
                    'Enhanced Speed',
                ]
            ],
            [
                'name'                 => 'Mukago',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank Four',
                'description'          => 'Mukago was a member of the Twelve Kizuki, having held the position of Lower Rank Four.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'affiliations'         => ['Demons', 'Twelve Kizuki'],
            ],
            [
                'name'                 => 'Rui',
                'age'                  => 13,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank Five',
                'description'          => 'Rui is the primary antagonist in the Natagumo Mountain Arc of Demon Slayer: Kimetsu no Yaiba. He is a demon affiliated with the Twelve Kizuki, holding the position of Lower Rank Five.',
                'firstAnimeAppearance' => 'Episode 15',
                'firstMangaAppearance' => 'Chapter 29',
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Thread Manipulation',
                        'description' => 'Rui\'s Blood Demon Art allows him to create thin threads indiscernable from string from his own cells, and manipulate them however he pleases.'
                    ],
                ],
                'affiliations' => ['Demons', 'Spider Family', 'Twelve Kizuki'],
                'abilities'    => [
                    'Overall Abilities',
                    'Demonic Blood',
                    'Cell Manipulation',
                    'Enhanced Durability',
                    'Enhanced Strength',
                    'Menacing Aura'
                ]
            ],
            [
                'name'                 => 'Kamanue',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Lower Rank Six',
                'description'          => 'Kamanue was a member of the Twelve Kizuki, having held the new position of Lower Rank Six.',
                'firstAnimeAppearance' => 'Episode 26',
                'firstMangaAppearance' => 'Chapter 51',
                'affiliations'         => ['Demons', 'Twelve Kizuki'],
            ],
            [
                'name'                 => 'Kyogai',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Demon',
                'occupation'           => 'Former Lower Rank Six',
                'description'          => 'Kyogai also known as the Drum Demon is the primary antagonist in the Tsuzumi Mansion Arc of Demon Slayer: Kimetsu no Yaiba. He was a Demon formerly affiliated with the Twelve Kizuki\'s Lower Ranks, having held the position of Lower Rank Six before Muzan Kibutsuji excommunicated him for not being strong enough. He was later replaced by Kamanue.',
                'firstAnimeAppearance' => 'Episode 11',
                'firstMangaAppearance' => 'Chapter 21',
                'affiliations'         => ['Demons', 'Twelve Kizuki'],
                'bloodDemonArts'       => [
                    [
                        'name'        => 'Drumming',
                        'description' => 'Kyogai harbors 6 Tsuzumi Drums imbedded in different parts of his body and each one of them, when played, enacts a certain effect on his surroundings.'
                    ],
                ],
            ],

            // Others
            [
                'name'                 => 'Tanjuro Kamado',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Coal Burner',
                'description'          => 'Tanjuro Kamado was the husband of Kie Kamado and the father of Tanjiro Kamado, Nezuko Kamado, Takeo Kamado, Hanako Kamado, Shigeru Kamado, and Rokuta Kamado.',
                'firstAnimeAppearance' => 'Episode 19',
                'firstMangaAppearance' => 'Chapter 39',
                'breathingStyles'      => ['Sun'],
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Overall Abilities',
                    'Demon Slayer Mark',
                    'Transparent World',
                    'Selfless State',
                    'Immense Stamina',
                    'Immense Endurance'
                ]
            ],
            [
                'name'                 => 'Kie Kamado',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Housewife',
                'description'          => 'Kie Kamado is Tanjiro Kamado\'s mother. She was killed by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Takeo Kamado',
                'age'                  => 10,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Probably Coal Burner',
                'description'          => 'Takeo Kamado was Tanjiro Kamado\'s first younger brother. He was killed by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Hanako Kamado',
                'age'                  => 8,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Probably Coal Burner',
                'description'          => 'Hanako Kamado was Tanjiro Kamado\'s youngest sister who was killed by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Shigeru Kamado',
                'age'                  => 8,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Probably Coal Burner',
                'description'          => 'Shigeru Kamado is Tanjiro Kamado\'s second youngest brother. He was killed by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Rokuta Kamado',
                'age'                  => 3,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Rokuta Kamado was the youngest brother of Tanjiro Kamado. He was killed by Muzan Kibutsuji.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Sumiyoshi',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Coal Seller',
                'description'          => 'Sumiyoshi is an ancestor of the Kamado Family and a close acquaintance of Yoriichi Tsugikuni.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 99',
                'breathingStyles'      => ['Sun'],
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Suyako',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Housewife',
                'description'          => 'Suyako was Sumiyoshi\'s wife and an ancestor to the Kamado Family.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 113',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Sumire',
                'age'                  => 2,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Sumire is the daughter of Sumiyoshi and Suyako, and is an ancestor of the Kamado Family.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 186',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Shoichi',
                'age'                  => 10,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Shoichi is a young boy saved by Tanjiro Kamado and Zenitsu Agatsuma when they approached him to help his older brother, Kiyoshi, escape from the Drum House. He also has a younger sister, Teruko.',
                'firstAnimeAppearance' => 'Episode 11',
                'firstMangaAppearance' => 'Chapter 20',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Koinatsu',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Oiran',
                'description'          => 'Koinatsu is the oiran of the Tokito House.',
                'firstAnimeAppearance' => 'Episode 35',
                'firstMangaAppearance' => 'Chapter 71',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Senjuro Rengoku',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Senjuro Rengoku is a supporting character of Demon Slayer: Kimetsu no Yaiba. He is the younger brother of the former Flame Hashira, Kyojuro Rengoku and the son of Shinjuro Rengoku and Ruka Rengoku.',
                'firstAnimeAppearance' => 'Kimetsu no Yaiba: The Movie - Mugen Train',
                'firstMangaAppearance' => 'Chapter 67',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Yuichiro Tokito',
                'age'                  => 11,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Child',
                'description'          => 'Yuichiro Tokito was the older twin brother of the Demon Slayer and Mist Hashira , Muichiro Tokito.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 118',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Kotoha Hashibira',
                'age'                  => 18,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Housewife',
                'description'          => 'Kotoha Hashibira was the mother of Inosuke Hashibira.',
                'firstAnimeAppearance' => 'Episode 18',
                'firstMangaAppearance' => 'Chapter 160',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Hisa',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Other',
                'description'          => 'Hisa is an old lady who welcomes Demon Slayers to rest in her house. Tanjiro Kamado and his group visit her after they fight Kyogai at the Drum House.',
                'firstAnimeAppearance' => 'Episode 14',
                'firstMangaAppearance' => 'Chapter 27',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Saburo',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Saburo is a villager from the village near Tanjiro\'s home.',
                'firstAnimeAppearance' => 'Episode 1',
                'firstMangaAppearance' => 'Chapter 1',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Kazumi',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Kazumi is a villager. His fiancée, Satoko, was kidnapped and eaten by the Swamp Demon.',
                'firstAnimeAppearance' => 'Episode 5',
                'firstMangaAppearance' => 'Chapter 9',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Satoko',
                'age'                  => 16,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Satoko was a villager betrothed to Kazumi. She was kidnapped and killed by the Swamp Demon.',
                'firstAnimeAppearance' => 'Episode 5',
                'firstMangaAppearance' => 'Chapter 9',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Tokie',
                'age'                  => 16,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Tokie is a resident of the village the Swamp Demon attacked and his final target.',
                'firstAnimeAppearance' => 'Episode 5',
                'firstMangaAppearance' => 'Chapter 10',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Keizo',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Martial Arts Teacher',
                'description'          => 'Keizo is the owner of a martial arts dojo and teaches the Soryū fighting style. He took Akaza (while still human) as his student.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 154',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Koyuki',
                'age'                  => 16,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Koyuki was the daughter of Keizo. Due to her sickness, she spent most of her time bedridden while being treated by Hakuji.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 154',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Takaharu',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Villager',
                'description'          => 'Takaharu is the grandson of the villager who taught Inosuke how to speak.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Inosuke\'s Fairy Tale',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Toyo',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Street Vendor',
                'description'          => 'Toyo is an udon street vendor.',
                'firstAnimeAppearance' => 'Episode 7',
                'firstMangaAppearance' => 'Chapter 13',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Tsutako Tomioka',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Other',
                'description'          => 'Tsutako Tomioka was the older sister of Giyu Tomioka.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 131',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Shizu Shinazugawa',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Demon',
                'occupation'           => 'Other',
                'description'          => 'Shizu Shinazugawa was the mother of Sanemi and Genya Shinazugawa.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 115',
                'breathingStyles'      => ['Wind'],
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Enhanced Speed',
                ]
            ],
            [
                'name'                 => 'Kyogo Shinazugawa',
                'age'                  => null,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Other',
                'description'          => 'Kyogo Shinazugawa is the biological father of Sanemi and Genya Shinazugawa and is the abusive husband of Shizu Shinazugawa.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 115',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Uta',
                'age'                  => null,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Housewife',
                'description'          => 'Uta was the wife of Yoriichi Tsugikuni. She was killed by a demon while pregnant with her first child.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 186',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Kanata Kamado',
                'age'                  => 16,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Student',
                'description'          => 'Kanata Kamado is the great-great-grandson of Tanjiro Kamado and Kanao Tsuyuri, and the older brother of Sumihiko Kamado. He is a teenage student currently going to the same school as his brother and Toko and Yoshiteru Agatsuma.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 205',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Sumihiko Kamado',
                'age'                  => 15,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Student',
                'description'          => 'Sumihiko Kamado is a teenage student living in the 21st century. He is the great-great-grandson of Tanjiro Kamado and Kanao Tsuyuri.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 205',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Overall Abilities',
                ]
            ],
            [
                'name'                 => 'Toko Agatsuma',
                'age'                  => 18,
                'gender'               => 'Female',
                'race'                 => 'Human',
                'occupation'           => 'Student',
                'description'          => 'Toko Agatsuma is the great-granddaughter of Zenitsu Agatsuma and Nezuko Kamado. She is also the older sister of Yoshiteru Agatsuma.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 205',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Yoshiteru Agatsuma',
                'age'                  => 17,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Student',
                'description'          => 'Yoshiteru Agatsuma is the great-grandson of Zenitsu Agatsuma and Nezuko Kamado and the younger brother of Toko Agatsuma, who is a teenage student.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 205',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
            [
                'name'                 => 'Aoba Hashibira',
                'age'                  => 28,
                'gender'               => 'Male',
                'race'                 => 'Human',
                'occupation'           => 'Botanist',
                'description'          => 'Aoba Hashibira is the great-grandson of Inosuke Hashibira and Aoi Kanzaki. He is a well known botanist involved in researching the Blue Spider Lily.',
                'firstAnimeAppearance' => null,
                'firstMangaAppearance' => 'Chapter 205',
                'affiliations'         => ['Others'],
                'abilities'            => [
                    'Ordinary human abilities',
                ]
            ],
        ];

        foreach ($characters as $character) {
            $created = Character::create(Arr::except($character, ['affiliations', 'breathingStyles', 'bloodDemonArts']));

            // Attach breathingStyles
            if (!empty($character['breathingStyles'])) {
                foreach ($character['breathingStyles'] as $style) {
                    BreathingStyle::whereName($style)->first()->knownUsers()->attach($created);
                }
            }

            // Attach bloodDemonArts
            if (!empty($character['bloodDemonArts'])) {
                foreach ($character['bloodDemonArts'] as $art) {
                    $created->bloodDemonArts()->create($art);
                }
            }

            // Attach affiliations
            if (!empty($character['affiliations'])) {
                foreach ($character['affiliations'] as $affiliation) {
                    Affiliation::whereName($affiliation)->first()->members()->attach($created);
                }
            }
        }
    }
}
