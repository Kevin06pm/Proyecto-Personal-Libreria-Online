<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellidos','calle','numero_domicilio'];

    public function calls() : HasMany{
        return $this->hasMany(Call::class);
    }
}
