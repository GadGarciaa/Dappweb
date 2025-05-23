<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Gender::create([
            'name' => 'Female',
        ]);
        Gender::create([
            'name' => 'Male',
        ]);
        Gender::create([
            'name' => 'Other',
        ]);
    }
}