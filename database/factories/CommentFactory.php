<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_name' => fake()->unique()->name,
            'user_email' => fake()->unique()->email,
            'text' => fake()->paragraph
        ];
    }
}
