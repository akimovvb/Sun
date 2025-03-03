<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $userData = [
            'name' => 'user',
            'email' => 'user@mail.ru',
            'password' => Hash::make(123123123), 
        ];

        $user = User::create($userData);

        $user->profile()->create();


       $this->call([
       
        CategorySeeder::class,
        ProfileSeeder::class,
        PostSeeder::class,
        CommentSeeder::class,
        RoleSeeder::class,
        TagSeeder::class,
    ]);
    }
}
