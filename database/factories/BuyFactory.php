<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Buy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buy>
 */
class BuyFactory extends Factory
{
    protected $model = Buy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userIds = User::pluck('id')->toArray();
        $bookIds = Book::pluck('idLibro')->toArray();


        return [
            'fechaCompra' => $this->faker->dateTimeThisDecade,
            'idUsuario' => $this->faker->randomElement($userIds),
            'idLibro' => $this->faker->randomElement($bookIds),
        ];
     
    }
}
