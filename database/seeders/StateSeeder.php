<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        State::create([
            'codigo' => 'R1001',
            'descripcion' => 'RESUELTO'
        ]);
        State::create([
            'codigo' => 'R1002',
            'descripcion' => 'EN EVOLUCIÓN'
        ]);
        State::create([
            'codigo' => 'R1003',
            'descripcion' => 'SIN ANALIZAR'
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
