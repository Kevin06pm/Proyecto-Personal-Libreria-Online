<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relación muchos a muchos con Books (Favoritos)
    public function favoriteBooks(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'cart', 'idUsuario', 'idLibro');
    }

    // Relación uno a muchos con Buys (Compras)
    public function buys(): HasMany
    {
        return $this->hasMany(Buy::class, 'idUsuario');
    }
}