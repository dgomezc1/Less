<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attraction>
 */
class AttractionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'estimated_waiting_time' => $this->faker->numberBetween(5, 120),
            'capacity' => $this->faker->numberBetween(50, 1000),
            'min_age' => $this->faker->numberBetween(0, 10),
            'max_age' => $this->faker->numberBetween(11, 100),
            'min_height' => $this->faker->numberBetween(0, 150),
            'max_height' => $this->faker->numberBetween(151, 220),
            'min_weight' => $this->faker->numberBetween(0, 70),
            'max_weight' => $this->faker->numberBetween(71, 200),
            'category' => $this->faker->numberBetween(1, 5),
            'image_path' => $this->faker->imageUrl(),
            'attraction_time' => $this->faker->numberBetween(10, 60),

        ];
    }
}
