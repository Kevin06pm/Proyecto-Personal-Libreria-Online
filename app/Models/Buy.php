<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buy extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCompra'; // Especifica la clave primaria
    protected $fillable = ['idLibro', 'idUsuario', 'fechaCompra'];

    // Relación muchos a uno con User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    // Relación muchos a uno con Book
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'idLibro');
    }

}
