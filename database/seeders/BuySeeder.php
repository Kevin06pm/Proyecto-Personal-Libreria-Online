<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Buy;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Buy::factory()->count(20)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
