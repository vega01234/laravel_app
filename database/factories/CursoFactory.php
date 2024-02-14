<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['El Infierno de Java', 'Python Basico', 'Introduccion a Laravel', 'PHP Intermedio', 'C++ La Venganza']),
            'description' => $this->faker->text(),
            'category' => $this->faker->randomElement(['Front End', 'Back End']),
        ];
    }
}
