<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'content' => join("\n\n", $this->faker->paragraphs(mt_rand(3, 6))),
            'published_at' => $this->faker->dateTimeBetween('-1 month', '+3 days'),

        ];
    }
}
