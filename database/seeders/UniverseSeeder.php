<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Universe::create([
            'name' => 'Marvel',
        ]);
        Universe::create([
            'name' => 'DC',
        ]);
    }
}