<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'author' => $this->faker->name,
            'ISBN' => $this->faker->isbn13,
            'price' => $this->faker->randomNumber(2),
            'inventory' => $this->faker->randomNumber(3)
        ];
    }
}
