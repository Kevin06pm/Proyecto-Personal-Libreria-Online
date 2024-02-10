<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['texto'];

    // Relacion Llamada - Comentario 1-1
    public function call() : BelongsTo {
        return $this->belongsTo(Call::class);
    }
}
