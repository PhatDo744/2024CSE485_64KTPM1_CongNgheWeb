<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'publication_year' => $this->faker->year(),
            'genre' => $this->faker->randomElement(['Programming', 'Adventure', 'Fantasy', 'Horror', 'Science Fiction']),
            'library_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
