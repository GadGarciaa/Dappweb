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
            UserSeeder::class
        ]);
        
        SuperHero::factory(8)->create();
    }
}