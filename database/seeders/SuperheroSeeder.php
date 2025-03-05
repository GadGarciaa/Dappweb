<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuperheroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('superhero')->insert([
            [
                'name' => 'Verdie Torp',
                'universo_id' => 1, // Ensure this ID exists in the universos table
                'genero_id' => 1, // Ensure this ID exists in the generos table
                'picture' => 'https://via.placeholder.com/640x480.png/0066dd?text=superhero+voluptatem',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Other records if any...
        ]);
    }
}
