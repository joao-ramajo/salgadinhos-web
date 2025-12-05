<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Snack>
 */
class SnackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(),
            'flavor' => $this->faker->randomElement(['chocolate', 'morango', 'baunilha', 'caramelo', 'limão']),
            'price' => $this->faker->randomFloat(2, 1, 20),
            'image' => $this->faker->imageUrl(400, 400, 'food'),
            'brand_id' => Brand::factory(),  // cria brand automaticamente
        ];
    }
}
