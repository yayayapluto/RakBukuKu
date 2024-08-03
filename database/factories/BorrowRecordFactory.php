<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowRecord>
 */
class BorrowRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pinjam_id' => $this->faker->unique()->word,
            'id_anggota' => User::inRandomOrder()->first()->id, // Randomly selects an existing user ID
            'id_buku' => Book::inRandomOrder()->first()->id, // Randomly selects an existing book ID
            'status' => $this->faker->randomElement(['dipinjam', 'dikembalikan']),
            'tgl_pinjam' => $this->faker->date(),
            'lama_pinjam' => $this->faker->numberBetween(1, 30),
            'tgl_balik' => $this->faker->date(),
            'tgl_kembali' => $this->faker->optional()->date(),
        ];
    }
}
