<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'user_id'=> User::first()->id,
            'phone' =>fake()->numberBetween(9, 12),
            'address'=> fake()->address(),
            'gender'=> fake()->randomElement(['Male', 'Female'])

        ];
    }
}
