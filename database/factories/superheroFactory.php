<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superhero>
 */
class SuperheroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id" => $this->faker->numberBetween(1, 10),
            "name" => $this->faker->name,
            "universo"=> $this->faker->numberBetween(1,10),
            "genero"=> $this->faker->numberBetween(1,10),
            "picture" => $this->faker->imageUrl(640,480,"superhero"),
        ];
    }
}