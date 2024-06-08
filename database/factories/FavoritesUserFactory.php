<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FavoritesUser>
 */
class FavoritesUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray(); // Cambia 'idUsuario' a 'id' si es necesario
        $bookIds = Book::pluck('idLibro')->toArray();

        return [
            'idUsuario' => $this->faker->randomElement($userIds), // Asegúrate de que el nombre de la columna es correcto
            'idLibro' => $this->faker->randomElement($bookIds),
        ];
    }
}
