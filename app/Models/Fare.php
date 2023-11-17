<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Fare extends Model
{
    protected $fillable = [
        'fare_period_id',
        'price',
        'is_active'
    ];

    public function farePeriod(): HasOne
    {
        return $this->hasOne(FarePeriod::class);
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
