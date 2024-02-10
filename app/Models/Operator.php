<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = ['numero_documento','tipo_documento','nombre','apellido','fecha_ingreso'];

    //RELACION REFLEXIVA


    public function coordinator(){
        return $this->belongsTo(Operator::class);
    }
    public function operators(){
        return $this->hasMany(Operator::class,"id_coordinador");
    }
}
