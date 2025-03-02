<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = Profile::first(); // Берем первый профиль из базы

        Post::factory()
            ->count(5) // Создаем 5 постов
            ->create() // Сначала создаем посты
            ->each(fn ($post) => $post->profiles()->attach($profile->id));
    }
}
