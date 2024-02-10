<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    use HasFactory;

    public function buys(): BelongsTo{
        return $this->belongsTo(Bill::class);
    }

    public function itemBills() : HasMany{
        return $this->hasMany(itemBill::class);
    }
}
