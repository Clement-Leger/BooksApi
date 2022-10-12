<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author' => fake()->name(),
            'date_of_parution' => $this->faker->year(),
            'book_name' => $this->faker->unique()->sentence(3),
            'category' => $this->faker->randomElement(['Fantasy', 'Medieval', 'Fantastic', 'Romance', 'Crime', 'Horror', 'Humour', 'Adventure']),
            'excerpt' => $this->faker->sentence(15),
            'pages' => mt_rand(120, 450),
        ];
    }
}
