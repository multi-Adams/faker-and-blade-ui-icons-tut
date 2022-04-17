<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->sentence(45),
            'likes' => $this->faker->randomNumber(5),
            'author' => $this->faker->name(),
            'draft' => $this->faker->boolean()
        ];
    }
}

