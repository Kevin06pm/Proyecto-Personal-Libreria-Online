<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;
    
    protected $fillable = ['descripcion'];

    // Relacion Reclamo - Estado
    public function claims() :HasMany{
        return $this->hasMany(Claim::class);
    }
}
