<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,   // If this seeder affects foreign keys of superheroes
            UniversoSeeder::class, // Inserted first to ensure universes exist
            SuperheroSeeder::class,// Inserted last as it depends on UniversoSeeder and GenderSeeder
        ]);
    }
}
