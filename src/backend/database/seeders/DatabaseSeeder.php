<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BreathingStyleSeeder::class);
        $this->call(AffilationSeeder::class);
        $this->call(CharacterSeeder::class);
    }
}
