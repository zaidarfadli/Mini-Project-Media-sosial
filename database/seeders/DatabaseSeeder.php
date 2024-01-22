<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Follow;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Comment::factory(4)->create([
        //     'id' => '4729092a-67d4-4413-aa0c-735a70164c2f',
        //     'user_id' => User::inRandomOrder()->first()->id,
        //     'post_id' => 'f5bad5a7-1a10-4e54-ba08-9d3d8fc6f89c',
        //     'comment' => 'Ini komen dummy',
        // ]);


        // User::factory(5)->create();
        // Post::factory(10)->create();
        Comment::factory(30)->create();
        Reply::factory(60)->create();

        // Follow::factory(30)->create([
        //     'user_id' => function () {
        //         return User::inRandomOrder()->first()->id;
        //     },
        //     'following_id' => function ($attributes) {
        //         // ini fungsinya untuk bikin ID pengguna acak yang tidak sama dengan user_id
        //         do {
        //             $followingUser = User::inRandomOrder()->first();
        //         } while ($followingUser->id == $attributes['user_id']);

        //         return $followingUser->id;
        //     },
        // ]);

        // User::factory()->create([
        //     'id' => Uuid::uuid4()->toString(),
        //     'name' => 'zaidarfadli',
        //     'username' => 'zaidar123',
        //     'email' => 'zaidar@gmail.com',
        //     'password' => '12345678'
        // ]);

        // User::factory()->create([
        //     'id' => Uuid::uuid4()->toString(),
        //     'name' => 'aji',
        //     'username' => 'aji123',
        //     'email' => 'aji@gmail.com',
        //     'password' => '12345678'
        // ]);

        // User::factory()->create([
        //     'id' => Uuid::uuid4()->toString(),
        //     'name' => 'fadli',
        //     'username' => 'fadli123',
        //     'email' => 'fadli@gmail.com',
        //     'password' => '12345678'
        // ]);
    }
}
