<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritesUser extends Model
{
    use HasFactory;

    protected $fillable = ['idUsuario','idLibro'];

    public function User()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    public function Book()
    {
        return $this->belongsTo(Book::class, 'idLibro');
    }
}
