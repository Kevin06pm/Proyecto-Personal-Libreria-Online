<?php

namespace Database\Factories;

use App\Models\Buy;
use App\Models\Call;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buy>
 */
class BuyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            // Obtener el número de IDs distintos en la tabla 'calls'
            $cod_llamada = DB::table('calls')->distinct()->pluck('id')->toArray();

                // Generar un valor único para cod_llamada
                $uniqueCodLlamada = fake()->unique()->randomElement($cod_llamada);

            // Resto de los campos y creación del modelo Buy
         return [
                'cod_llamada' => $uniqueCodLlamada,
                'numero' => fake()->unique()->randomNumber(8),
                'fecha' => fake()->dateTimeBetween('-1 year', 'now'),
                'medioPago' => fake()->randomElement(['Tarjeta', 'Transferencia']), 
                'pers_autoriz' => fake()->name()
            ];


    }
}