<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'content' => $this->faker->paragraph,
            'image' => 'https://source.unsplash.com/random',
        ];
    }
}
