<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'spacies' => $this->faker->randomElement(['pudol', 'pastor aleman', 'pitbull', 'chiguagua']),
            'race' => $this->faker->randomElement(['cant']),
            'vaccines' => $this->faker->randomElement(['si', 'no']),
            'rides' => $this->faker->randomNumber(),
        ];
    }
}
