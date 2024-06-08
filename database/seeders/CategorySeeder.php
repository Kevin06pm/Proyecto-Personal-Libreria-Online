<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['idCategoria' => 1, 'nombreCategoria' => 'Fantasía']);
        Category::create(['idCategoria' => 2, 'nombreCategoria' => 'Misterio']);
        Category::create(['idCategoria' => 3, 'nombreCategoria' => 'Aventura']);
        Category::create(['idCategoria' => 4, 'nombreCategoria' => 'Romance']);
        Category::create(['idCategoria' => 5, 'nombreCategoria' => 'Terror']);
        Category::create(['idCategoria' => 6, 'nombreCategoria' => 'Drama']);
        Category::create(['idCategoria' => 7, 'nombreCategoria' => 'Humor']);
        Category::create(['idCategoria' => 8, 'nombreCategoria' => 'Biografía']);
        Category::create(['idCategoria' => 9, 'nombreCategoria' => 'Literatura juvenil']);
        Category::create(['idCategoria' => 10, 'nombreCategoria' => 'Novela psicológica']);
        Category::create(['idCategoria' => 11, 'nombreCategoria' => 'Literatura clásica']);
        Category::create(['idCategoria' => 12, 'nombreCategoria' => 'Viajes en el tiempo']);

    }
}
