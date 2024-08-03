<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rack;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'buku_id' => $this->faker->unique()->numerify('BKU-#####'),
            'id_kategori' => Category::factory(),
            'id_rak' => Rack::factory(),
            'sampul' => $this->faker->imageUrl(640, 480, 'books', true),
            'isbn' => $this->faker->isbn13(),
            'lampiran' => $this->faker->filePath(),
            'judul' => $this->faker->sentence(3),
            'penerbit' => $this->faker->company(),
            'pengarang' => $this->faker->name(),
            'thn_terbit' => $this->faker->year(),
            'isi' => $this->faker->paragraph(),
            'stok' => $this->faker->numberBetween(1, 100),
            'tgl_masuk' => $this->faker->date(),
        ];
    }

}
