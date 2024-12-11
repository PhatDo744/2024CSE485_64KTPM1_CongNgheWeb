<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Library;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Library::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->company() . ' Library',
            "address" => $this->faker->address(),
            "contact_number" => $this->faker->phoneNumber(),
        ];
    }
}
