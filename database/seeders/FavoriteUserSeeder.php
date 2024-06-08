<?php

namespace Database\Seeders;

use App\Models\FavoritesUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        FavoritesUser::factory()->count(20)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
