<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UniversoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('universo')->insert([
            [
                'name' => 'DcComics',
                'publisher' => 'DC',
                'number_of_heroes' => 0,
                'number_of_villains' => 0,
                'has_multiverse' => false,
                'has_supernatural_beings' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Marvel',
                'publisher' => 'Marvel',
                'number_of_heroes' => 0,
                'number_of_villains' => 0,
                'has_multiverse' => false,
                'has_supernatural_beings' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    
    }
}    