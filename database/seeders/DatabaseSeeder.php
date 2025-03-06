<?php
namespace Database\Seeders;

use App\Models\SuperHero;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            UniverseSeeder::class,
        ]);
        
        SuperHero::factory(5)->create();
    }
}