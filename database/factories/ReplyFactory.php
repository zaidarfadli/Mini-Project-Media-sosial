<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Uuid::uuid4()->toString(),
            'user_id' => User::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,
            'comment_id' => Comment::inRandomOrder()->first()->id,
            'reply' => $this->faker->paragraph,
        ];
    }
}
