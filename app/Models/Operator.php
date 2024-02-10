<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = ['numero_documento','tipo_documento','nombre','apellido','fecha_ingreso'];

    public function calls() : HasMany{
        return $this->hasMany(Call::class); //

    }

    //relacion reflexiva 
    public function coordinator() : BelongsTo{
        return $this->belongsTo(Operator::class); //
    }

    public function operators() : HasMany{
        return $this->hasMany(Operator::class, 'id_coordinador');
    }





}
