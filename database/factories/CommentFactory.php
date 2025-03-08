<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->realTextBetween(60, 255),
            'author' => fake()->name(),
            'likes'=>fake()->numberBetween(10, 1000),
         //   'post_id' => Post::inRandomOrder()->first()->id,
            'profile_id' => Profile::inRandomOrder()->first()->id,
            'user_id' => User::first()->id,

            'commentable_id' => Post::inRandomOrder()->first()->id,
            'commentable_type' => Post::class,
        ];
    }
}
