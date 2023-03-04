<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
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
            'Judul' => $this->faker->name,
            'Penerbit' => $this->faker->name,
            'Pengarang' => $this->faker->name,
            'sampul' => $this->faker->path,
        ];
    }
}