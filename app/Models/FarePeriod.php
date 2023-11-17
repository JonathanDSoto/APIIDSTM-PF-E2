<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FarePeriod extends Model
{
    protected $fillable = [
        'name'
    ];

    public function fare(): BelongsTo
    {
        return $this->belongsTo(Fare::class);
    }
}
