<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstname,
            'surname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => fake()->randomElement(['user', 'admin']),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ];
    }
}
