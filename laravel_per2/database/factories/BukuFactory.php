<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'=> $this->faker->words(2, true),
            'penulis' => $this->faker->name(),
            'harga' => '95000',
            'tgl_terbit' => '2014-07-04'
        ];

    }
}
