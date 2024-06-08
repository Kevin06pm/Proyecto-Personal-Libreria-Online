<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['idCategoria, nombreCategoria'];

    protected $primaryKey = 'idCategoria';

    // Relación uno a muchos con Books
    public function books()
    {
        return $this->hasMany(Book::class, 'idCategoria');
    }
}
