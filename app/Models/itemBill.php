<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class itemBill extends Model
{
    use HasFactory;
    protected $fillable = ['cantidad'];

    public function bill(): BelongsTo{
        return $this->belongsTo(Bill::class);
    }

    public function product() : BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
