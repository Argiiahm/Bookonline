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
    public function definition(): array
    {
        return [
            "nama_buku" => $this->faker->word(mt_rand(9,12)),
            "slug" => $this->faker->slug(),
            "isi" => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 12))) . '</p>',
            "User_id" => mt_rand(1,15),
            "Category_id" => mt_rand(0,6),
        ];
    }
}
