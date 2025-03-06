<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuperHero;

class SuperHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperHero::create([
            'name' => 'Spider-Man',
            'real_name' => 'Peter Parker',
            'gender_id' => 1,
            'universe_id' => 1,
            'picture' => 'https://example.com/spiderman.jpg',
        ]);
    }
}