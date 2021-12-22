<?php

namespace Database\Factories;
use App\Models\AuthorBook;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => rand(1, 22),
            'book_id' => rand(1, 22)
        ];
    }
}
