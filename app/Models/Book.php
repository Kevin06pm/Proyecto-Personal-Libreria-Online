<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'idLibro'; // Definir la clave primaria como 'idLibro'

    

    protected $fillable = [
        'imagenPortada', 
        'codigoLibro', 
        'valoracion', 
        'precio',
        'titulo', 
        'autor', 
        'genero',
        'añoPublicación',
        'numPaginas',
        'sinopsis',
        'idCategoria'];

    // Relación muchos a uno con Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'idCategoria');
    }

    // Relación muchos a muchos con Users (Favoritos)
    public function favoritedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites_users', 'idLibro', 'idUsuario');
    }

    // Relación uno a muchos con Buys
    public function buys(): HasMany
    {
        return $this->hasMany(Buy::class, 'idLibro');
    }
}
