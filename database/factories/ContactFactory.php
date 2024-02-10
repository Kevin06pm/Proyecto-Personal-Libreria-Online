<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numeroRandom = rand(1,100);
        
        return [
            'numero_documento' => fake()->unique()->randomElement($numeroRandom),
            'tipo_documento' => fake()->unique()->randomElement(['DNI','Pasaporte','NIF']),
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'calle' => fake()->streetAddress(),
            'numero_domicilio' => fake()->numberBetween(1, 50)
        ];
    }
}
