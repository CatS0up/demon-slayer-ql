<?php

namespace Database\Seeders;

use App\Models\Character\Ability;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abilities = [
            'Extrasensory Perception',
            'Flesh Manipulation',
            'Immense Durability',
            'Immense Regeneration',
            'Immense Strength',
            'Indomitable Will',
            'Tactical Intellect',
            'Leadership Skills',
            'Medical Knowledge',
            'Trained Craftsmanship',
            'Soothing Voice',
            'Foresight',
            'Intuition',
            'Extraordinary Memory',
            'Longevity',
            'Demon Slayer Mark',
            'Bright Red Nichirin Sword',
            'Immense Speed',
            'Immense Reflexes',
            'Immense Stamina',
            'Immense Endurance',
            'Indomitable Will',
            'Abnormal Muscular Constitution',
            'Enhanced Flexibility',
            'Kaburamaru',
            'Marechi',
            'Muscle Control',
            'Weapon Versatility',
            'Enhanced Hearing',
            'Repetitive Action',
            'Echolocation',
            'Musical Score',
            'Shinobi Training',
            'Enhanced Stealth',
            'Poison Resistance',
            'Transparent World',
            'Omnipresent Rage',
            'Enhanced Agility',
            'Keen Intellect',
            'Medical Expertise',
            'Anti-Kibutsuji Drug',
            'Poisonous Physiology',
            'Enhanced Sense of Smell',
            'Enhanced Speed',
            'Enhanced Strength',
            'Enhanced Vision',
            'Total Concentration: Constant',
            'Enhanced Accuracy',
            'Enhanced Smell',
            'Pseudo-Precognition',
            'Genius Intellect',
            'Combat Intuition',
            'Hard Skull',
            'Selfless State',
            'Unconscious Combat',
            'Animal Imitation',
            'Enhanced Touch',
            'Demonic Transformation',
            'Upper Rank Four Empowerment',
            'Upper Rank One Empowerment',
            'Flesh Gun',
            'Trained Craftsmanship',
            'Biological Absorption',
            'Combat Form',
            'Arm Whips',
            'Mouth Suction',
            'Leg Whips',
            'Spine Whips',
            'Demonic Blood',
            'Blood Memory Transfer',
            'Demon Manipulation',
            'Demon Curse',
            'Demon Memory Access',
            'Demon Power Nullification',
            'Possession',
            'Telepathy',
            'Genius Intellect',
            'Immeasurable Speed',
            'Immeasurable Reflexes',
            'Immeasurable Strength',
            'Nigh-Absolute Regeneration',
            'Unlimited Stamina',
            'Unlimited Endurance',
            'Abnormal Demon Physiology',
            'Awakened Form',
            'Sunlight Resistance',
            'Size Alteration',
            'Anti-Blood Demon Coagulant',
            'Body Modification',
            'Curse Immunity',
            'Talented Painter',
            'Enhanced Tracking',
            'Enhanced Resilience',
            'Pain Tolerance',
            'Shapeshifting',
            'Eye Detachment',
            'Talented Biwa Player',
            'Regeneration',
            'Decapitation Immunity',
            'Hair Manipulation',
            'Flesh Detachments',
            'Fusion',
            'Cell Manipulation',
            'Menacing Aura',
            'Drumming',
            'Tantōjutsu Expert',
            'Apathy',
            'Reactive Adaptation',
            'Talented Artist',
            'Core Detachment',
            'Poison Generation',
            'Skilled Torturer',
            'Master Swordsmith',
            'Ordinary Human Abilities',
            'Ordinary Demon abilities'
        ];

        foreach ($abilities as $ability) {
            Ability::create(['name' => $ability]);
        }
    }
}
