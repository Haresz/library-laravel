<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'Judul' => fake()->name,
            'Penerbit' => fake()->name,
            'Pengarang' => fake()->name,
            'sampul' => fake()->imageUrl(400, 300),
        ];
    }
}
