<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageOptions = ['pria1.jpg', 'pria2.jpg', 'wanita1.jpg', 'wanita2.jpg'];
        return [
            'id' => Uuid::uuid4()->toString(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'image' => $this->faker->randomElement(['pria1.jpg', 'pria2.jpg', 'wanita1.jpg', 'wanita2.jpg']),
            'username' => $this->faker->userName(),
            'bio' => $this->faker->paragraph(),
            'email_verified_at' => now(),
            'password' => '12345678', // Default password 'password'
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
