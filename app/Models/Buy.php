<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = ['fecha','medioPago','pers_autoriz'];

    public function call():BelongsTo{
        return $this->belongsTo(Call::class);
    }

    public function bills() : HasOne{
        return $this->hasOne(Bill::class);
    }
}
