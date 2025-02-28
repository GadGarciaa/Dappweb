<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\universo;

class UniversoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        universo::create([
            "name"=> "DcComics",
        ]);
    }
}
