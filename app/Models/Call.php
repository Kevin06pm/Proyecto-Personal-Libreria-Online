<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Call extends Model
{
    use HasFactory;

    protected $fillable = ['numero_telefono','fecha_llamada','hora_llamada','numero_linea_interno'];

    // Relacion Contacto - Llamada
    public function contact() : BelongsTo {
        return $this->belongsTo(Contact::class);//Las llamadas se pueden hacer a un contacto
    }

    // Relacion de Llamada a Comentario 1-1
    public function comment() : HasOne{
        return $this->hasOne(Call::class);
    }
}
