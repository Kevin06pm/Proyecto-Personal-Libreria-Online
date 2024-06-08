<?php

namespace Database\Factories;

use App\Models\Category;
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
            // 'titulo' => $this->faker->sentence(4),
            // 'autor' => $this->faker->name,
            // 'genero' => $this->faker->randomElement(['Ficción', 'Fantasía', 'Romance', 'Misterio', 'Aventura']),
            // 'añoPublicacion' => $this->faker->numberBetween(1900, 2022),
            // 'numeroPaginas' => $this->faker->numberBetween(50, 1000),
            // 'sinopsis' => $this->faker->paragraph(3),
            // 'idCategoria' => function () {
            //     return Category::factory()->create()->idCategoria;
            // },

            // 'codigoLibro' => $this->faker->unique()->ean13(), 
            // 'valoracion' => $this->faker->randomFloat(2, 1, 5),
            // 'precio' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
